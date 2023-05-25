

//DISPLAY DATA
function displayData() {
    var displayData = "true";
    $.ajax({
        url: "../../Libs/display.php",
        type: 'post',
        data: {
            displaySend: displayData
        },
        success: function (data) {
            $('#displayProductData').html(data);
        }
    });
}



//ADD PRODUCT

function addproduct() {
    var product_name = $('#product_name').val();
    var product_price = $('#product_price').val();
    var product_description = $('#product_description').val();
    var product_brand = $('#product_brand').val();
    $.ajax({
        url: "../../Libs/insert.php",
        type: 'post',
        data: {
            product_name: product_name,
            product_price: product_price,
            product_description: product_description,
            product_brand: product_brand,
        },

        success: function () {
            displayData();
        }

    });
    location.reload();

}

//DELETE PRODUCT
function deleteProduct(deleteid) {
    $.ajax({
        url: "../../Libs/delete.php",
        type: 'post',
        data: {
            deleteSend: deleteid
        },
        success: function () {
            displayData();

        }
    })

}


//GET DETAILS PRODUCT
function getDetail(updateid) {
    $('#hiddendata').val(updateid);

    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            updateid: updateid
        },
        success: function (data, status) {
            var productid = JSON.parse(data);
            $('#update_name').val(productid.product_name);
            $('#update_price').val(productid.product_price);
            $('#update_description').val(productid.product_description);
            $('#update_brand').val(productid.product_brand);
        }
    });
    $('#updateproduct').modal('show');

}


//UPDATE PRODUCT
function update_product() {
    var update_name = $('#update_name').val();
    var update_price = $('#update_price').val();
    var update_description = $('#update_description').val();
    var update_brand = $('#update_brand').val();
    var hiddendata = $('#hiddendata').val();


    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            update_name: update_name,
            update_price: update_price,
            update_description: update_description,
            update_brand: update_brand,
            hiddendata: hiddendata
        },
        success: function (data) {
            $('#updateproduct').modal('hide');
            displayData();

        }
    });
    location.reload();


}



//ADD NEWS

function addnews() {
    var news_title = $('#news_title').val();
    var news_description = $('#news_description').val();
    var news_content = $('#news_content').val();
    $.ajax({
        url: "../../Libs/insert_news.php",
        type: 'post',
        data: {
            news_title: news_title,
            news_description: news_description,
            news_content: news_content,
        },

        success: function (data, status) {
            displayDataNews();
        }

    });
    location.reload();

}

//DISPLAY DATA NEWS
function displayDataNews() {
    var displayDataNews = "true";
    $.ajax({
        url: "../../Libs/display.php",
        type: 'post',
        data: {
            displaySendNews: displayDataNews
        },
        success: function (data) {
            $('#displayNewsData').html(data);
        }
    });
}

//GET DETAILS NEWS
function getDetailNews(updateidnews) {
    $('#hiddendatanews').val(updateidnews);

    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            updateidnews: updateidnews
        },
        success: function (data, status) {
            var newsid = JSON.parse(data);
            $('#update_title').val(newsid.news_title);
            $('#update_description').val(newsid.news_description);
            $('#update_content').val(newsid.news_content);
        }
    });
    $('#updatenews').modal('show');

}

//UPDATE NEWS
function update_news() {
    var update_title = $('#update_title').val();
    var update_description = $('#update_description').val();
    var update_content = $('#update_content').val();
    var hiddendatanews = $('#hiddendatanews').val();


    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            update_title: update_title,
            update_description: update_description,
            update_content: update_content,
            hiddendatanews: hiddendatanews
        },
        success: function (data) {
            $('#updatenews').modal('hide');
            displayData();

        }
    });
    location.reload();


}
//DELETE NEWS
function deleteNews(deleteidnews) {
    $.ajax({
        url: "../../Libs/delete.php",
        type: 'post',
        data: {
            deleteSendNews: deleteidnews
        },
        success: function () {
            displayDataNews();

        }
    })

}






//INFORMATION
//ADD INFO

function addinfo() {
    var info_name = $('#info_name').val();
    var info_email = $('#info_email').val();
    var info_phone = $('#info_phone').val();
    var info_address = $('#info_address').val();

    $.ajax({
        url: "../../Libs/insert.php",
        type: 'post',
        data: {
            info_name: info_name,
            info_email: info_email,
            info_phone: info_phone,
            info_address:info_address
        },

        success: function (data, status) {
            displayDataInfo();
        }

    });
    location.reload();

}

//DISPLAY DATA NEWS
function displayDataInfo() {
    var displayDataInfo = "true";
    $.ajax({
        url: "../../Libs/display.php",
        type: 'post',
        data: {
            displaySendInfo: displayDataInfo
        },
        success: function (data) {
            $('#displayInfoData').html(data);
        }
    });
}

//GET DETAILS INFO
function getDetailInfo(updateidinfo) {
    $('#hiddendatainfo').val(updateidinfo);

    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            updateidinfo: updateidinfo
        },
        success: function (data, status) {
            var infoid = JSON.parse(data);
            $('#update_name').val(infoid.info_name);
            $('#update_email').val(infoid.info_email);
            $('#update_phone').val(infoid.info_phone);
            $('#update_address').val(infoid.info_address);

        }
    });
    $('#updateinfo').modal('show');

}

//UPDATE INFO
function update_info() {
    var update_name = $('#update_name').val();
    var update_email = $('#update_email').val();
    var update_phone = $('#update_phone').val();
    var update_address = $('#update_address').val();

    var hiddendatainfo = $('#hiddendatainfo').val();


    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            update_name: update_name,
            update_email: update_email,
            update_phone: update_phone,
            update_address:update_address,
            hiddendatainfo: hiddendatainfo
        },
        success: function (data) {
            $('#updatenews').modal('hide');
            displayDataInfo();

        }
    });
    location.reload();


}
//DELETE INFO
function deleteNews(deleteidnews) {
    $.ajax({
        url: "../../Libs/delete.php",
        type: 'post',
        data: {
            deleteSendNews: deleteidnews
        },
        success: function () {
            displayDataNews();

        }
    })

}






//SETTING
//ADD SETTING

function addsetting() {
    var setting_name = $('#setting_name').val();
    var setting_language = $('#setting_language').val();
    var setting_color = $('#setting_color').val();

    $.ajax({
        url: "../../Libs/insert.php",
        type: 'post',
        data: {
            setting_name: setting_name,
            setting_language: setting_language,
            setting_color: setting_color,
        },

        success: function (data, status) {
            $('#displaySettingData').html(data);
        }

    });
    location.reload();

}

//DISPLAY DATA SETTING
function displayDataSetting() {
    var displayDataSetting = "true";
    $.ajax({
        url: "../../Libs/display.php",
        type: 'post',
        data: {
            displaySendSetting: displayDataSetting
        },
        success: function (data) {
            $('#displaySettingData').html(data);
        }
    });
}

//GET DETAILS SETTING
function getDetailSetting(updateidsetting) {
    $('#hiddendatasetting').val(updateidsetting);

    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            updateidsetting: updateidsetting
        },
        success: function (data, status) {
            var settingid = JSON.parse(data);
            $('#update_name').val(settingid.setting_name);
            $('#update_language').val(settingid.setting_language);
            $('#update_color').val(settingid.setting_color);

        }
    });
    $('#updatesetting').modal('show');

}

//UPDATE SETTING
function update_setting() {
    var update_name = $('#update_name').val();
    var update_language = $('#update_language').val();
    var update_color = $('#update_color').val();

    var hiddendatasetting = $('#hiddendatasetting').val();


    $.ajax({
        url: "../../Libs/update.php",
        type: 'post',
        data: {
            update_name: update_name,
            update_language: update_language,
            update_color: update_color,
            hiddendatasetting: hiddendatasetting
        },
        success: function (data) {
            $('#updatesetting').modal('hide');
            displayDataSetting();

        }
    });
    location.reload();


}
//DELETE SETTING
function deleteSetting(deleteidsetting) {
    $.ajax({
        url: "../../Libs/delete.php",
        type: 'post',
        data: {
            deleteSendSetting: deleteidsetting
        },
        success: function () {
            displayDataSetting();

        }
    })

}














var $nonloading = $('#nonloading').show();
var $loading = $('#loading').hide();
$(document)
    .ajaxStart(function () {
        $loading.show();
        $nonloading.hide();
    })
    .ajaxStop(function () {
        $loading.hide();
        $nonloading.show();
    });



var $nonloading = $('#nonloading_upd').show();
var $loading = $('#loading_upd').hide();
$(document)
    .ajaxStart(function () {
        $loading.show();
        $nonloading.hide();
    })
    .ajaxStop(function () {
        $loading.hide();
        $nonloading.show();
    });