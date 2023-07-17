(function ($) {
    $('#ya-api-form').on('submit', function (e) {
        e.preventDefault();

        const inputs = $(this).find('input:not([type="submit"], [type="file"]), textarea');
        const inputsFile = $(this).find('input[type="file"]');

        const dataApi = {};

        inputs.each(function () {
            dataApi[$(this).attr('name')] = $(this).val();
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



        // function getYaApiToken() {
        //     return new Promise(function (resolve, reject) {
        //         $.get(
        //             ajax.url,
        //             { action: 'ya_api_get_token' },
        //             function (res) {
        //                 res = JSON.parse(res);
        //                 if (res.status) {
        //                     resolve(res.token);
        //                 } else {
        //                     reject(new Error('Токен не получен'));
        //                 }
        //             }
        //         );
        //     });
        // }

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

        // function ajaxPromise(options, callback) {
        //     return new Promise(function (resolve, reject) {
        //         $.ajax(options)
        //             .done(
        //                 function (success) {
        //                     if (callback) {
        //                         const res = callback(success);
        //                         if (res) {
        //                             resolve();
        //                         } else {
        //                             reject();
        //                         }
        //                     } else {
        //                         resolve(success);
        //                     }
        //                 }
        //             )
        //             .fail(reject);
        //     });
        // }

        // function checkFolder(folder, token, path = '/') {
        //     return ajaxPromise({
        //         url: API_YA_PATH,
        //         type: 'GET',
        //         data: {
        //             path: path
        //         },
        //         beforeSend: function (xhr) {
        //             xhr.setRequestHeader('Authorization', 'OAuth ' + token);
        //         }
        //     }, function (res) {
        //         const items = res._embedded.items;
        //         let folders = [];

        //         items.forEach(item => {
        //             folders.push(item.name);
        //         });

        //         return folders.includes(folder);
        //     });
        // }

        // function createFolder(path, token) {
        //     return ajaxPromise({
        //         url: API_YA_PATH + '?path=' + path,
        //         type: 'PUT',
        //         beforeSend: function (xhr) {
        //             xhr.setRequestHeader('Authorization', 'OAuth ' + token);
        //         }
        //     });
        // }

        // const API_YA_PATH = 'https://cloud-api.yandex.net/v1/disk/resources';
        let yaApiToken;
        // let rootFolder = dataApi.surname + ' ' + dataApi.name;

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


        // getYaApiToken()
        //     .then(function (token) {
        //         yaApiToken = token;

        //         return checkFolder(rootFolder, yaApiToken);
        //     })
        //     .then(function (res) { // Если главная папка уже есть
        //         // ??
        //     })
        //     .catch(function () { // Если главную папку нужно создать
        //         createFolder(rootFolder, yaApiToken)
        //             .then(function (res) { // Папка создана

        //             })
        //             .catch(function () {
        //                 console.log();
        //             });
        //     });





        // ------------------------------

        const API_YA_PATH = 'https://cloud-api.yandex.net/v1/disk/resources';

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

        function ajaxPromise(options) {
            return new Promise(function (resolve, reject) {
                $.ajax(options)
                    .done(resolve)
                    .fail(reject);
            });
        }

        async function checkFolder(token, path, folder) {
            try {
                const metaPath = await ajaxPromise({
                    url: API_YA_PATH,
                    type: 'GET',
                    data: {
                        path: path
                    },
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                    }
                });

                const items = metaPath._embedded.items;

                for (const item of items) {
                    if (item.type === 'dir' && item.name === folder) {
                        return item.path;
                    }
                }

                return null;
            } catch (error) {
                throw error;
            }
        }

        async function createFolder(token, path) {
            try {
                const metaCreate = await ajaxPromise({
                    url: API_YA_PATH + '?path=' + path,
                    type: 'PUT',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                    }
                });

                return metaCreate;
            } catch (error) {
                throw error;
            }
        }

        async function uploadFiles(token, path, files) {
            try {
                for (let file of files) {
                    const formData = new FormData();

                    formData.append('file', file);

                    const metaUploadUrl = await ajaxPromise({
                        url: API_YA_PATH + '/upload',
                        type: 'GET',
                        data: {
                            path: path + file.name,
                            overwrite: true
                        },
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('Authorization', 'OAuth ' + token);
                        }
                    });

                    if (metaUploadUrl) {
                        await ajaxPromise({
                            url: metaUploadUrl.href,
                            type: 'PUT',
                            data: formData,
                            processData: false,
                            contentType: false
                        });
                    }
                };
            } catch (error) {
                throw error;
            }
        }

        async function yaProcess(token, tagPath, files, currentPath) {
            const tagPathFolders = tagPath.split('/').filter(Boolean);

            for (let i = 0; i < tagPathFolders.length; i++) {
                const folder = tagPathFolders[i];
                const folderExists = await checkFolder(token, currentPath, folder);

                if (!folderExists) { // папки нет    
                    for (let j = i; j < tagPathFolders.length; j++) {
                        const folderCreate = tagPathFolders[j];

                        currentPath += folderCreate + '/';
                        await createFolder(token, currentPath);
                    }

                    break;
                }

                currentPath += folder + '/';
            }

            await uploadFiles(token, currentPath, files);
        }

        async function setRootFolder(token, mainPath, rootFolder) {
            const checkRootFolder = await checkFolder(token, mainPath, rootFolder);

            if (!checkRootFolder) {
                const createRootFolder = createFolder(token, mainPath + '/' + rootFolder);
                return createRootFolder;
            }

            return checkRootFolder;
        }


        (async () => {
            const API_YA_TOKEN = await getYaApiToken();
            const rootFolder = dataApi.surname + ' ' + dataApi.name;

            let rootPath = await setRootFolder(API_YA_TOKEN, '/НОК', rootFolder);
            rootPath = rootPath.href;

            if (rootPath) {
                for (let i = 0; i < inputsFile.length; i++) {
                    const file = inputsFile[i];

                    const path = $(file).attr('data-path');
                    const files = $(file).prop('files');

                    if (files.length > 0) {
                        await yaProcess(API_YA_TOKEN, path, files, '/НОК/' + rootFolder + '/');
                    }
                }
            }
        })();
    });

    // const API_YA_PATH = 'https://cloud-api.yandex.net/v1/disk/resources';

    // function ajaxPromise(options) {
    //     return new Promise(function (resolve, reject) {
    //         $.ajax(options)
    //             .done(resolve)
    //             .fail(reject);
    //     });
    // }

    // async function checkFolder(token, path, folder) {
    //     try {
    //         const metaPath = await ajaxPromise({
    //             url: API_YA_PATH,
    //             type: 'GET',
    //             data: {
    //                 path: path
    //             },
    //             beforeSend: function (xhr) {
    //                 xhr.setRequestHeader('Authorization', 'OAuth ' + token);
    //             }
    //         });

    //         const items = metaPath._embedded.items;

    //         for (const item of items) {
    //             if (item.type === 'dir' && item.name === folder) {
    //                 return item.path;
    //             }
    //         }

    //         return null;
    //     } catch (error) {
    //         throw error;
    //     }
    // }

    // async function createFolder(token, path) {
    //     try {
    //         const metaCreate = await ajaxPromise({
    //             url: API_YA_PATH + '?path=' + path,
    //             type: 'PUT',
    //             beforeSend: function (xhr) {
    //                 xhr.setRequestHeader('Authorization', 'OAuth ' + token);
    //             }
    //         });

    //         return metaCreate;
    //     } catch (error) {
    //         throw error;
    //     }
    // }

    // (async () => {
    //     const API_TOKEN = 'y0_AgAAAABaJGDNAAnn_gAAAADjNlPU4taDJMQbRrKdMeWiyXl-3at_aOw';

    //     const arr = 'Объекты/Объект 5';
    //     let currentPath = '/НОК/тест/';

    //     const folders = arr.split('/').filter(Boolean);

    //     for (let i = 0; i < folders.length; i++) {
    //         const folder = folders[i];

    //         if (!await checkFolder(API_TOKEN, currentPath, folder)) {
    //             for (let j = i; j < folders.length; j++) {
    //                 const folderCreate = folders[j];

    //                 currentPath += folderCreate + '/';
    //                 console.log(currentPath);

    //                 const createFolderRes = await createFolder(API_TOKEN, currentPath);
    //             }

    //             break;
    //         }

    //         currentPath += folder + '/';
    //     }
    // })();
})(jQuery)