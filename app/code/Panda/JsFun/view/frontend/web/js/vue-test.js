define(['vue', 'jquery', 'Panda_JsFun/js/jquery-log'], function (Vue, $) {
    'use strict'

    $.log('Testing console')

    return function (config, element){
        new Vue({
            el: '#' + element.id,
            data: {
                message: config.message
            }
        })
    }
})
