/**
 * Created by lawrance on 2016/11/29.
 */
$(function () {

    //1.初始化Table
    var oTable = new TableInit();
    oTable.Init();
//        $[sessionStorage] = oTable.queryParams;

    //2.初始化Button的点击事件
    var oButtonInit = new ButtonInit();
    oButtonInit.Init();

});

var TableInit = function () {
    var oTableInit = new Object();
    //初始化Table
    oTableInit.Init = function () {
        $('#table_survey').bootstrapTable({
            url: "http://localhost/CESBack/index.php/Home/Method/getSurvey",   //请求后台的URL（*）
            method: 'get',      //请求方式（*）
            toolbar: '#toolbar',    //工具按钮用哪个容器
            striped: true,      //是否显示行间隔色
            cache: false,      //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
            pagination: true,     //是否显示分页（*）
            sortable: false,      //是否启用排序
            sortName: 'group_name', // 设置默认排序为 name
            sortOrder: 'asc', // 设置排序为正序 asc
            queryParams: oTableInit.queryParams,//传递参数（*）
//                sidePagination: "server",   //分页方式：client客户端分页，server服务端分页（*）
            pageNumber: 1,      //初始化加载第一页，默认第一页
            pageSize: 10,      //每页的记录行数（*）
//                pageList: [10, 25, 50, 100, ALL],  //可供选择的每页的行数（*）
            search: true,      //是否显示表格搜索，此搜索是客户端搜索，不会进服务端，所以，个人感觉意义不大
            strictSearch: true,
            showColumns: true,     //是否显示所有的列
            showRefresh: true,     //是否显示刷新按钮
            minimumCountColumns: 2,    //最少允许的列数
            clickToSelect: true,    //是否启用点击选中行
            height: 500,      //行高，如果没有设置height属性，表格自动根据记录条数觉得表格高度
            uniqueId: "ID",      //每一行的唯一标识，一般为主键列
            showToggle: true,     //是否显示详细视图和列表视图的切换按钮
            cardView: false,     //是否显示详细视图
            detailView: false,     //是否显示父子表
            columns: [{
                checkbox: true
            }, {
                field: 'group_name',
                sortable: true,
                align: 'center',
                title: '组别'
            }, {
                field: 'name',
                sortable: true,
                align: 'center',
                title: '问卷名称'
            }, {
                field: 'level',
                sortable: true,
                align: 'center',
                title: '问卷等级'
            }, {
                field: 'owner',
                sortable: true,
                align: 'center',
                title: '问卷创建者'
            }, {
                field: 'operation',
                title: '操作',
                align: 'center',
                formatter: "actionFormatter",
                events: "actionEvents",
                clickToSelect: false
            }]
        });
    };

    //得到查询的参数
    oTableInit.queryParams = function (params) {
        var temp = { //这里的键的名字和控制器的变量名必须一直，这边改动，控制器也需要改成一样的
            limit: params.limit, //页面大小
            offset: params.offset, //页码
            search: params.search
        };
        return temp;
    };

    return oTableInit;
};

var ButtonInit = function () {
    var oInit = new Object();
    var postdata = {};

    oInit.Init = function () {
        //初始化页面上面的按钮事件
    };

    return oInit;
};

window.actionEvents = {
    'click .delete': function (e, value, row, index) {
        $('#list_output').text(row.id);
        //删除操作
        $('#myModal').modal('show');
    },
    'click .send': function (e, value, row, index) {
    },
    'click .look': function (e, value, row, index) {
    }
};

function actionFormatter(value, row, index) {
//        return '<a class="mod" >修改</a> ' + '<a class="delete">删除</a> ' + '<a class="send">增添发送</a>';
    return '<a class="look" style="margin: 0">查看</a> ' + '<a class="delete" style="margin: 0">删除</a> ' + '<a class="send">编辑</a>';
}

function show() {
    var survey_name = $('#txt_search_user_input').val();
    var url = '?';
    if (survey_name != '') {
        url += ('name=' + survey_name);
    }
    if (url == '?') {
        $.scojs_message('查询内容不能为空！', $.scojs_message.TYPE_ERROR);
    }
    $('#table_survey').bootstrapTable('refresh', {url: "http://localhost/CESBack/index.php/Home/Method/searchSurvey" + url});
}

$('#btn_delete').click(function () {
    $result = $('#table_survey').bootstrapTable('getAllSelections');
    if ($result[0] != null) {
        $.scojs_message('删除全部将会丢失所有数据，请等待开发！', $.scojs_message.TYPE_ERROR);
    }
});

$('#btn_add').click(function () {
    $('#wrapper1').hide();
    $('#wrapper2').show();
});

function goBack() {
    $('#wrapper1').show();
    $('#wrapper2').hide();
}

function addQuestion() {
    $('#newSurveyQuestion').modal('show');
}

//增加一个li时需要传入它的问题名称以及问题编号（通过文本框id获取），再请求完后台入库成功后显示新增
function addLi(question_id, content) {
    var id = $('#q_count').val();
    id++;
    var id_name = 'sur_ques_li' + id;
    $li = $("<li class='list-group-item mar_top' value='" + question_id + "' id='" + id_name + "' class='height-40' style='display: block'><span>" + content + "</span><button type='button' value='" + question_id + '-' + id_name + "' onclick='delQuestion(this);' class='btn btn-danger' style='float:right;margin-right:-4px;height:25px;width:40px;line-height:0;margin-top:-3px;'><span style='margin-left:-7px;'>删除</span></button></li>");
    $("#QuestionList").append($li);
    var id = $('#q_count').val(id);
}

function delQuestion(obj) {
    var res = $(obj).attr("value");
    var arr = res.split('-');
    $('#' + arr[1]).hide();
    //arr[0]  数据库中删除
}

function delOption(obj) {
    alert($(obj).attr("value"));
    var id = 'div_option' + $(obj).attr("value");
    $('#' + id).hide();
    //最后提交的时候要获取选项的内容 Qlistorder即为选项的个数，通过判断display来获取选项具体内容进而保存
    //alert($('#' + id).attr('style'));
}

function qType(id) {
    switch (id) {
        //单选、多选
        case 1:
        case 2:
            $('#gap_filling').hide();
            $('#simple_multiple_chioce').show();
            break;
        //填空
        case 3:
            $('#gap_filling').show();
            $('#simple_multiple_chioce').hide();
            break;
    }
}

function addNewOption() {
    var id = $('#Qlistorder').val();
    id++;
    var id_name = 'div_option' + id;
    var option_name = 'select_option' + id;
    $input = $("<div class='mar-top-10' id='" + id_name + "' style='display: block'> <div class='left-f mar-top-10'> <input type='text' name='' placeholder='请输入选项" + id + "的内容' id='" + option_name + "' class='form-control col-sm-6'> </div> <div class='left-f mar-left-10  mar-top-10'> <button type='button' onclick='delOption(this);' value='" + id + "' class='btn btn-danger left-f'><span>删除</span></button> </div> </div>");
    $("#options_list").append($input);
    $('#Qlistorder').val(id);
}

function submitQuestion() {
    //必填项
    var group = $('#survey_sub_group').val();
    var q_level = $('#question_level input[name="survey_type"]:checked ').val();
    var q_ismust = $('#is_must_radio input[name="Qismust"]:checked ').val();
    var q_qtype = $('#Qtype input[name="Qtype"]:checked ').val();
    var q_name = $('#Qtitle').val();
    if (q_level == '' || q_ismust == '' || q_qtype == '' || q_name == '') {
        $.scojs_message("必填项不能为空！", $.scojs_message.TYPE_ERROR);
        return;
    }
    //选填项
    var q_hint = $('#Qhint').val();
    var q_beforehint = $('#QBeforeHint').val();
    var q_afterhint = $('#QAfterHint').val();

    switch (q_qtype) {
        case '1':
        case '2':
        {
            //问题选项 必填
            var num = $('#Qlistorder').val();
            var option = new Array();
            for (var i = 1; i <= num; i++) {
                var ele = $('#div_option' + i);
                var ele_option = $('#select_option' + i);
                if (ele.attr('style') == 'display: block') {
                    //alert(ele_option.val());
                    if (ele_option.val() == '') {
                        $.scojs_message('题目选项内容不能为空！', $.scojs_message.TYPE_ERROR);
                        return;
                    } else {
                        option.push(ele_option.val());
                    }
                }
            }
            break;
        }
        case '3':
            var q_input_size = $('input[name="input_size"]:checked').val();
            break;
    }
    var q_surveyorder = $('#new_survey_sort').val();
    var arr = JSON.stringify(option);
    //提交至数据库
    //未删除时保存它的问题序列号至数据库中问卷列表下
    $.ajax({
        type: "POST", //用POST方式传输
        url: "http://localhost/CESBack/index.php/Home/CourseManage/addNewQuestion", //目标地址.
        dataType: "json", //数据格式:JSON
        data: {
            q_level: q_level,
            q_ismust: q_ismust,
            q_qtype: q_qtype,
            q_name: q_name,
            q_hint: q_hint,
            q_beforehint: q_beforehint,
            q_afterhint: q_afterhint,
            option: arr,
            q_input_size: q_input_size,
            q_surveyorder: q_surveyorder,
            group: group
        },
        success: function (result) {
            if (result.status == 'success') {
                addLi(result.id, q_name);
                $('#new_survey_sort').val(++q_surveyorder);
                $('#newSurveyQuestion').modal('hide');
                $.scojs_message('问题添加成功！', $.scojs_message.TYPE_OK);
            } else if (result.status == 'failed') {
                $.scojs_message('问题添加失败，请稍后再试！' + result.message, $.scojs_message.TYPE_ERROR);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $.scojs_message('网络连接发生未知错误，请稍后再试！' + errorThrown, $.scojs_message.TYPE_ERROR);
        }
    });
}

function submitSurvey() {
    var num = $('#q_count').val();//问卷当中的问题总数

    var name = $('#new_survey_name').val();
    var group = $('#survey_sub_group').val();
    var level = $('#survey_level input[name="survey_type"]:checked ').val();
    var detail = $('#new_survey_detail').val();//简介

    //问卷的问题列表
    var result = '';
    for (var i = 1; i <= num; i++) {
        var ele = $('#sur_ques_li' + i);
        if (ele.attr('style') == 'display: block') {
            if (i != num)
                result += (ele.attr('value') + ',');
            else
                result += (ele.attr('value'));
        }
    }

    if(name==''||group==''||level==''||result==''){
        $.scojs_message("必填项不能为空！", $.scojs_message.TYPE_ERROR);
        return;
    }
    //alert(result +'=='+ name +'=='+ group+'=='+ level+'=='+ detail);
    $.ajax({
        type: "POST", //用POST方式传输
        url: "http://localhost/CESBack/index.php/Home/CourseManage/addNewSurvey", //目标地址.
        dataType: "json", //数据格式:JSON
        data: {
            count: num,
            name: name,
            group: group,
            level: level,
            detail: detail,
            question: result
        },
        success: function (result) {
            if (result.status == 'success') {
                $('#wrapper1').show();
                $('#wrapper2').hide();
                $.scojs_message('问卷添加成功！', $.scojs_message.TYPE_OK);
                $('#table_survey').bootstrapTable('refresh');

            } else if (result.status == 'failed') {
                $.scojs_message('问卷添加失败，请稍后再试！' + result.message, $.scojs_message.TYPE_ERROR);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $.scojs_message('网络连接发生未知错误，请稍后再试！' + errorThrown, $.scojs_message.TYPE_ERROR);
        }
    });
}