'use strict';

$(function () {
    const url = window.location.origin;

    // jstree
    const jsTree = $('#jstree');

    jsTree.on('activate_node.jstree', function (node, event) {
        const teks = event.node.text;

        /*
        * periksa apakah node yang ditekan user berupa
        * berkas yang berakhiran .jpeg, .jpg, atau .png
        * */
        if (teks.match(/\.(jpeg|jpg|png)$/)) {
            const dapatkanJalur = event.instance.get_path(event.node, '/');

            $.magnificPopup.open({
                closeOnBgClick: false,
                items: {
                    src: `${url}/storage/galeri/foto/${dapatkanJalur}`
                },
                type: 'image'
            });
        }
    }).jstree({
        core: {
            data: {
                dataType: 'json',
                url: `${url}/data`
            },
            multiple: false
        }
    });
});
