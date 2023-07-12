(function ($) {
    $('#ya-api-form').on('submit', function (e) {
        e.preventDefault();

        const inputs = $(this).find('input:not([type="submit"]), textarea');
        const files = [];
        const userInfo = [];
        const folders = {
            diplom: 'Диплом',
            tk: 'Трудовая книжка',
            object1: 'Объект 1',
            object2: 'Объект 2',
            object3: 'Объект 3',
            sit_plan: 'Ситуационный план',
            pzu: 'ПЗУ',
            ar: 'Раздел АР',
            kr: 'Раздел КР',
            dop: 'Дополнительно',
            proj_pol_otv: 'Проект полосы отвода',
            tkr: 'Раздел ТКР',
            pol_zakl_exp_po_osn_proj: 'Положительное заключение экспертизы по основному проекту',
            nagradi: 'Имеющиеся у специалиста награды, грамоты, дипломы (необязательно)'
        };

        const dataApi = {};
        const filesApi = {};

        inputs.each(function () {
            if ($(this).is('[type="file"]')) {
                const path = $(this).attr('data-path') ? $(this).attr('data-path') : null;

                filesApi[$(this).attr('name')] = {
                    path,
                    files: $(this).prop('files')
                };
            } else {
                dataApi[$(this).attr('name')] = $(this).val();
            }
        });

        dataApi['action'] = 'ya_api_generate_rtf';

        // $.post(
        //     ajax.url,
        //     dataApi,
        //     function(res) {
        //         console.log(res);
        //     }
        // );



        // function createFolder(accessToken, path, callback) {
        //     $.ajax({
        //         url: yaApiUrl + '?path=' + path,
        //         type: 'PUT',
        //         beforeSend: function (xhr) {
        //             xhr.setRequestHeader('Authorization', 'OAuth ' + accessToken);
        //         },
        //         success: function (response) {
        //             var uploadUrl = response.href;
        //             callback(uploadUrl);
        //         }
        //     });
        // }

        // function uploadFiles(accessToken, folder, file) {
        //     const uploadPath = '/' + folder + '/' + file.name;
        //     const formData = new FormData();
        //     formData.append('file', file);

        //     $.ajax({
        //         url: yaApiUrl + '/upload',
        //         type: 'GET',
        //         beforeSend: function (xhr) {
        //             xhr.setRequestHeader('Authorization', 'OAuth ' + accessToken);
        //         },
        //         data: {
        //             path: uploadPath,
        //             overwrite: true
        //         },
        //         success: function (response) {
        //             const uploadUrl = response.href;

        //             $.ajax({
        //                 url: url,
        //                 type: 'PUT',
        //                 data: formData,
        //                 processData: false,
        //                 contentType: false,
        //                 xhr: function () {
        //                     // var xhr = new window.XMLHttpRequest();
        //                     // xhr.upload.addEventListener('progress', function (e) {
        //                     //     if (e.lengthComputable) {
        //                     //         var percent = (e.loaded / e.total) * 100;
        //                     //         // Обновляем прогресс-бар или отображаем прогресс загрузки
        //                     //         $('#progressBar').val(percent);
        //                     //         console.log('Прогресс загрузки: ' + percent + '%');
        //                     //     }
        //                     // }, false);
        //                     // return xhr;
        //                 },
        //                 success: function (response) {
        //                     console.log('Файл успешно загружен на Яндекс.Диск:', response);
        //                 },
        //                 error: function (xhr, status, error) {
        //                     console.log('Ошибка загрузки файла:', error);
        //                 }
        //             });
        //         },
        //         error: function (xhr, status, error) {
        //             console.log('Ошибка получения URL для загрузки:', error);
        //         }
        //     });
        // }

        // $.get( // Запрашиваем ТОКЕН из базы данных
        //     ajax.url,
        //     {
        //         action: 'ya_api_get_token'
        //     },
        //     function (res) {
        //         res = JSON.parse(res);

        //         if (res.status) {
        //             const accessToken = res.token;

        //             const rootFolder = dataApi['surname'] + ' ' + dataApi['name'];
        //             createFolder(accessToken, rootFolder, function () {
        //                 const files = filesApi['root'];
        //                 for (let i = 0; i < files.length; i++) {
        //                     uploadFiles(accessToken, rootFolder, files[i]);
        //                 }
        //             });
        //         }
        //     }
        // );



        function getYaApiToken() {
            return new Promise(function (resolve, reject) {
                $.get(
                    ajax.url,
                    { action: 'ya_api_get_token' },
                    function (res) {
                        res = JSON.parse(res);
                        if (res.status) {
                            resolve(res.token);
                        } else {
                            reject(new Error('Токен не получен'));
                        }
                    }
                );
            });
        }

        function createYaFolder(token, path) {
            return new Promise(function (resolve, reject) {
                $.ajax({
                    url: yaApiUrl,
                    type: 'GET',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                    },
                    data: {
                        path: path
                    },
                    success: function (res) {
                        console.log(res);
                        resolve(res);
                    }
                })
                // .fail(function (xhr, status, error) {
                //     if (xhr.status === 404) {
                //         const folder = yaApiUrl + '?path=' + path;

                //         $.ajax({
                //             url: folder,
                //             type: 'PUT',
                //             beforeSend: function (xhr) {
                //                 xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                //             },
                //             success: function (createdFolder) { // Возвращаем созданную папку при успешном выполнении запроса PUT
                //                 resolve(createdFolder);
                //             },
                //             error: function (xhr, status, error) {
                //                 reject(new Error('Ошибка при создании папки: ' + error));
                //             }
                //         });
                //     } else {
                //         reject(new Error('Ошибка при проверке папки: ' + error));
                //     }
                // });
            });
        }

        // getYaApiToken()
        //     .then(function (token) {
        //         yaApiToken = token;
        //         createYaFolder(token, 'ttp');
        //     })
        //     .then(function (folder) {
        //         console.log(folder);
        //     })
        //     .catch(function (error) {
        //         console.error(error);
        //     });

        function ajaxPromise(options, callback) {
            return new Promise(function (resolve, reject) {
                $.ajax(options)
                    .done(
                        function (success) {
                            if (callback) {
                                const res = callback(success);
                                if (res) {
                                    resolve();
                                } else {
                                    reject();
                                }
                            } else {
                                resolve(success);
                            }
                        }
                    )
                    .fail(reject);
            });
        }

        function checkFolder(folder, token, path = '/') {
            return ajaxPromise({
                url: API_YA_PATH,
                type: 'GET',
                data: {
                    path: path
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                }
            }, function (res) {
                const items = res._embedded.items;
                let folders = [];

                items.forEach(item => {
                    folders.push(item.name);
                });

                return folders.includes(folder);
            });
        }

        function createFolder(path, token) {
            return ajaxPromise({
                url: API_YA_PATH + '?path=' + path,
                type: 'PUT',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                }
            });
        }

        const API_YA_PATH = 'https://cloud-api.yandex.net/v1/disk/resources';
        let yaApiToken;
        let rootFolder = dataApi.surname + ' ' + dataApi.name;

        function ttt() {
            console.log(filesApi);

            for (let key in filesApi) {
                const item = filesApi[key];
                const path = item.path;
                const files = item.files;
    
                if (path !== null) {
                    const folderOfPath = path.split('/');
                    let currentPath = '';
                    
                    for (let i = 0; i < folderOfPath.length; i++) {
                        if (folders[i] !== '') {
                            currentPath += '/' + folders[i];
                            
                            checkFolder(currentPath);
                        }
                    }
                }

            }
        }

        //ttt();


        getYaApiToken()
            .then(function (token) {
                yaApiToken = token;

                return checkFolder(rootFolder, yaApiToken);
            })
            .then(function (res) { // Если главная папка уже есть
                // ??
            })
            .catch(function () { // Если главную папку нужно создать
                createFolder(rootFolder, yaApiToken)
                    .then(function (res) { // Папка создана

                    })
                    .catch(function () {
                        console.log();
                    });
            });
    });
})(jQuery)