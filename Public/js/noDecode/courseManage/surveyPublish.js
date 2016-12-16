/**
 * Created by lawrance on 2016/12/5.
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
            url: HOST + "CESBack/index.php/Home/Method/getSurvey",   //请求后台的URL（*）
            method: 'get',      //请求方式（*）
            toolbar: '#toolbar_survey',    //工具按钮用哪个容器
            striped: true,      //是否显示行间隔色
            cache: false,      //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
            pagination: true,     //是否显示分页（*）
            sortable: false,      //是否启用排序
            sortName: 'group_name', // 设置默认排序为 name
            sortOrder: 'asc', // 设置排序为正序 asc
            queryParams: oTableInit.queryParams,//传递参数（*）
//                sidePagination: "server",   //分页方式：client客户端分页，server服务端分页（*）
            pageNumber: 1,      //初始化加载第一页，默认第一页
            pageSize: 10,      //每页的记录行数（*）
//                pageList: [10, 25, 50, 100, ALL],  //可供选择的每页的行数（*）
            search: true,      //是否显示表格搜索，此搜索是客户端搜索，不会进服务端，所以，个人感觉意义不大
            strictSearch: false,
            showColumns: true,     //是否显示所有的列
            showRefresh: true,     //是否显示刷新按钮
            minimumCountColumns: 2,    //最少允许的列数
            clickToSelect: true,    //是否启用点击选中行
            height: 500,      //行高，如果没有设置height属性，表格自动根据记录条数觉得表格高度
            uniqueId: "ID",      //每一行的唯一标识，一般为主键列
            showToggle: true,     //是否显示详细视图和列表视图的切换按钮
            cardView: false,     //是否显示详细视图
            detailView: false,     //是否显示父子表
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
                events: "actionEvents_survey",
                clickToSelect: false
            }]
        });

        $('#table_user').bootstrapTable({
            url: HOST + "CESBack/index.php/Home/WeChat/getInfo",   //请求后台的URL（*）
            //url: "{:U('WeChat/getInfo')}", //目标地址.
            method: 'get',      //请求方式（*）
            toolbar: '#toolbar',    //工具按钮用哪个容器
            striped: true,      //是否显示行间隔色
            cache: false,      //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
            pagination: true,     //是否显示分页（*）
            sortable: false,      //是否启用排序
            sortName: 'stu_num', // 设置默认排序为 name
            sortOrder: 'asc', // 设置排序为正序 asc
            queryParams: oTableInit.queryParams,//传递参数（*）
//                sidePagination: "server",   //分页方式：client客户端分页，server服务端分页（*）
            pageNumber: 1,      //初始化加载第一页，默认第一页
            pageSize: 10,      //每页的记录行数（*）
//                pageList: [10, 25, 50, 100, ALL],  //可供选择的每页的行数（*）
            search: true,      //是否显示表格搜索，此搜索是客户端搜索，不会进服务端，所以，个人感觉意义不大
            strictSearch: false,
            showColumns: true,     //是否显示所有的列
            showRefresh: true,     //是否显示刷新按钮
            minimumCountColumns: 2,    //最少允许的列数
            clickToSelect: true,    //是否启用点击选中行
            height: 500,      //行高，如果没有设置height属性，表格自动根据记录条数觉得表格高度
            uniqueId: "ID",      //每一行的唯一标识，一般为主键列
            showToggle: true,     //是否显示详细视图和列表视图的切换按钮
            cardView: false,     //是否显示详细视图
            detailView: false,     //是否显示父子表
            columns: [{
                checkbox: true
            }, {
                field: 'stu_num',
                sortable: true,
                align: 'center',
                title: '学号'
            }, {
                field: 'stu_name',
                sortable: true,
                align: 'center',
                title: '姓名'
            }, {
                field: 'stu_sex',
                sortable: true,
                align: 'center',
                title: '性别'
            }, {
                field: 'stu_graclass',
                sortable: true,
                align: 'center',
                title: '年级'
            }, {
                field: 'stu_pro',
                sortable: true,
                align: 'center',
                title: '专业'
            }, {
                field: 'stu_class',
                sortable: true,
                align: 'center',
                title: '班级'
            }, {
                field: 'is_match',
                sortable: true,
                align: 'center',
                title: '是否匹配'
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

window.actionEvents_user = {
    'click .look': function (e, value, row, index) {
        alert(row.stu_name);
    }
};

window.actionEvents_survey = {
    'click .look': function (e, value, row, index) {
        alert(row.name);
    }
};

function actionFormatter(value, row, index) {
    return '<a class="look" style="margin: 0">查看</a> ';
}

function show_user() {
    var stu_pro = $('#txt_search_pro').val();
    var stu_class = $('#txt_search_class').val();
    var stu_gra = $('#txt_search_graclass').val();
    var stu_name = $('#txt_search_name').val();
    var url = '?';
    if (stu_pro != '') {
        url += ('pro=' + stu_pro + '&');
    }
    if (stu_class != '') {
        url += ('class=' + stu_class + '&');
    }
    if (stu_gra != '') {
        url += ('gra=' + stu_gra + '&');
    }
    if (stu_name != '') {
        url += ('name=' + stu_name + '&');
    }
    if (url == '?') {
        $.scojs_message('查询内容不能为空！', $.scojs_message.TYPE_ERROR);
    }
    $('#table_user').bootstrapTable('refresh', {url: HOST + "CESBack/index.php/Home/WeChat/searchInfo" + url});
}

function show_survey() {
    var survey_name = $('#txt_search_user_input_survey').val();
    var url = '?';
    if (survey_name != '') {
        url += ('name=' + survey_name);
    }
    if (url == '?') {
        $.scojs_message('查询内容不能为空！', $.scojs_message.TYPE_ERROR);
    }
    $('#table_survey').bootstrapTable('refresh', {url: HOST + "CESBack/index.php/Home/Method/searchSurvey" + url});
}

function surveyPublish() {
    var surveyArray = $('#table_survey').bootstrapTable('getAllSelections');
    var userArray = $('#table_user').bootstrapTable('getAllSelections');
    if (surveyArray == '') {
        $.scojs_message('请选择要发布的问卷，单击问卷所在行即可选择！', $.scojs_message.TYPE_ERROR);
        return;
    }
    if (userArray == '') {
        $.scojs_message('请选择要发布问卷的用户，单击用户所在行即可选择！', $.scojs_message.TYPE_ERROR);
        return;
    }
    var surveyIDArray = new Array();
    for (var i = 0; i < surveyArray.length; i++) {
        surveyIDArray[i] = surveyArray[i]['survey_id'];
    }
    surveyArray = JSON.stringify(surveyIDArray);
    var userIDArray = new Array();
    var userOpenIDArray = new Array();
    var count = 0;
    for (var i = 0; i < userArray.length; i++) {
        userOpenIDArray.push(userArray[i]['openid']);
        userIDArray.push(userArray[i]['stu_num']);
        if (userArray[i]['is_match'] == '是') {
            count++;
        }
    }
    if (count != userArray.length) {
        $.scojs_message('所选用户中包含未匹配用户，未匹配用户需要在匹配之后才能评价问卷！', $.scojs_message.TYPE_ERROR);
    }
    var open = JSON.stringify(userOpenIDArray);
    var id = JSON.stringify(userIDArray);
    $.ajax({
        type: "POST", //用POST方式传输
        url: HOST + "CESBack/index.php/Home/CourseManage/surveyMatch", //目标地址.
        dataType: "json", //数据格式:JSON
        data: {s: surveyArray, u: id, o: open},
        success: function (result) {
            if (result.status == 'success') {
                $.scojs_message('发布成功，请在结束后查询结果！', $.scojs_message.TYPE_OK);
            } else if (result.status == 'failed') {
                $.scojs_message('发布失败，请稍后再试！' + result.message, $.scojs_message.TYPE_ERROR);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $.scojs_message('发布问卷的用户中不能包含已分配问卷评价任务的用户！', $.scojs_message.TYPE_ERROR);
        }
    });
    //alert(surveyArray + '---' + userArray);
}

function isArray(obj) {
    return Object.prototype.toString.call(obj) === '[object Array]';
}