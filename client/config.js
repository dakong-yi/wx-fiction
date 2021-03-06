/**
 * 小程序配置文件
 */

// 此处主机域名修改成腾讯云解决方案分配的域名
var host = 'https://diktllm1.qcloud.la';

var config = {

    // 下面的地址配合云端 Demo 工作
    service: {
        host,

        // 登录地址，用于建立会话
        loginUrl: `${host}/weapp/login/index`,

        // 测试的请求地址，用于测试会话
        requestUrl: `${host}/weapp/user/index`,

        // 测试的信道服务地址
        tunnelUrl: `${host}/weapp/tunnel/index`,

        // 上传图片接口
        uploadUrl: `${host}/weapp/upload/index`,

        //类型列表接口
        typeUrl: `${host}/weapp/demo/index`,

        fictionUrl: `${host}/weapp/demo/getlist`,

        articleUrl: `${host}/weapp/demo/getarticle`,

        detailUrl: `${host}/weapp/demo/getcontent`,
    }
};

module.exports = config;