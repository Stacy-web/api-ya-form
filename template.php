<form id="ya-api-form" enctype="multipart/form-data">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-6">
                <h3 class="title">Личные данные</h3>
            </div>
            <div class="col-6">
                <h3 class="title">Профессиональные сведения</h3>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="custom-input">
                        <span>Фамилия специалиста</span>
                        <input type="text" name="surname">
                    </label>
                    <label class="custom-input">
                        <span>Имя специалиста</span>
                        <input type="text" name="name">
                    </label>
                    <label class="custom-input">
                        <span>Отчество специалиста</span>
                        <input type="text" name="patronymic">
                    </label>
                    <label class="custom-input">
                        <span>Электронная почта</span>
                        <input type="email" name="email">
                    </label>
                    <label class="custom-input">
                        <span>Телефон</span>
                        <input type="text" name="phone">
                    </label>
                    <label class="custom-input">
                        <span>Фото специалиста</span>

                        <label class="custom-input__file">
                            <input type="file" name="photo_spec" multiple data-path="">

                            <span>Выбрать файлы</span>
                        </label>
                        <ul></ul>
                    </label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="custom-input">
                        <span>Общий стаж работы в строительной отрасли (по вашему мнению)</span>
                        <input type="text" name="work_experience1">
                    </label>
                    <label class="custom-input">
                        <span>Стаж на инженерных/руководящих должностях (по вашему мнению)</span>
                        <input type="text" name="work_experience2">
                    </label>
                    <label class="custom-input">
                        <span>Перечень ПО, применяемого в работе</span>
                        <textarea cols="30" rows="3" name="po"></textarea>
                    </label>
                    <label class="custom-input">
                        <span>Диплом о высшем образовании (без заверения)</span>

                        <label class="custom-input__file">
                            <input type="file" name="diplom" data-path="Диплом" data-path="Диплом">

                            <span>Выбрать файлы</span>
                        </label>
                        <ul></ul>
                    </label>
                    <label class="custom-input">
                        <span>Трудовая книжка (без заверения)</span>

                        <label class="custom-input__file">
                            <input type="file" name="tk" data-path="Трудовая книжка">

                            <span>Выбрать файлы</span>
                        </label>
                        <ul></ul>
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="title">Перечень ранее реализованных проектов</h3>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="unit">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label class="custom-input">
                                    <span>Наименование первого объекта</span>
                                    <input type="text" name="object1_name">
                                </label>
                                <label class="custom-input">
                                    <span>Дата подготовки документации первого объекта</span>
                                    <input type="text" name="object1_date1">
                                </label>
                                <label class="custom-input">
                                    <span>Дата реализации первого объекта</span>
                                    <input type="text" name="object1_date2">
                                </label>
                            </div>
                            <div class="col-5 offset-1">
                                <label class="custom-input">
                                    <span>Фотография или чертеж первого объекта (необязательно, но
                                        желательно)</span>

                                    <label class="custom-input__file">
                                        <input type="file" name="object1_files" data-path="Объекты/Объект 1">

                                        <span>Выбрать файлы</span>
                                    </label>
                                    <ul></ul>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="unit">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label class="custom-input">
                                    <span>Наименование второго объекта</span>
                                    <input type="text" name="object2_name">
                                </label>
                                <label class="custom-input">
                                    <span>Дата подготовки документации второго объекта</span>
                                    <input type="text" name="object2_date1">
                                </label>
                                <label class="custom-input">
                                    <span>Дата реализации второго объекта</span>
                                    <input type="text" name="object2_date2">
                                </label>
                            </div>
                            <div class="col-5 offset-1">
                                <label class="custom-input">
                                    <span>Фотография или чертеж второго объекта (необязательно, но
                                        желательно)</span>

                                    <label class="custom-input__file">
                                        <input type="file" name="object2_files" data-path="Объекты/Объект 2">

                                        <span>Выбрать файлы</span>
                                    </label>
                                    <ul></ul>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="unit">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label class="custom-input">
                                    <span>Наименование третьего объекта</span>
                                    <input type="text" name="object3_name">
                                </label>
                                <label class="custom-input">
                                    <span>Дата подготовки документации третьего объекта</span>
                                    <input type="text" name="object3_date1">
                                </label>
                                <label class="custom-input">
                                    <span>Дата реализации третьего объекта</span>
                                    <input type="text" name="object3_date2">
                                </label>
                            </div>
                            <div class="col-5 offset-1">
                                <label class="custom-input">
                                    <span>Фотография или чертеж третьего объекта (необязательно, но
                                        желательно)</span>

                                    <label class="custom-input__file">
                                        <input type="file" name="object3_files" data-path="Объекты/Объект 3">

                                        <span>Выбрать файлы</span>
                                    </label>
                                    <ul></ul>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="title">Материалы по основному проекту портфолио</h3>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="unit">
                        <label class="custom-input">
                            <span>Выберите тип объекта</span>

                            <select name="object_type">
                                <option value="var1">Объект капитального строительства</option>
                                <option value="var2">Линейный объект</option>
                                <option value="var3">Другое</option>
                            </select>
                        </label>
                    </div>
                    <div class="unit unit-materials active" data-obj-type="var1">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Ситуационный план</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="sp" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="sp" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="sp_files" data-path="Проектная документация/Ситуационный план">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Схема планировочной организации земельного участка</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="spozu" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="spozu" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="spozu_files" data-path="Проектная документация/Схема планировочной организации земельного участка">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Архитектурные решения</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="ar" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="ar" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="ar_files" data-path="Проектная документация/Архитектурные решения">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Конструктивные и объемно-планировочные решения</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="kr" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="kr" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="kr_files" data-path="Проектная документация/Конструктивные и объемно-планировочные решения">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Сведения об инженерном оборудовании, о сетях инженерно-технического обеспечения</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="siosno" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="siosno" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="siosno_files" data-path="Проектная документация/Сведения об инженерном оборудовании, о сетях инженерно-технического обеспечения">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Дополнительно</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="dop" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="dop" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="dop_files" data-path="Проектная документация/Дополнительно">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="unit unit-materials" data-obj-type="var2">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Ситуационный план</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="sp" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="sp" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="sp_files" data-path="Проектная документация/Ситуационный план">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Проект полосы отвода</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="ppo" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="ppo" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="ppo_files" data-path="Проектная документация/Проект полосы отвода">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Технологические и конструктивные решения линейного объекта</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="tkr" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="tkr" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="tkr_files" data-path="Проектная документация/Технологические и конструктивные решения линейного объекта">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Дополнительно</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="dop" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="dop" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="dop_files" data-path="Проектная документация/Дополнительно">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="unit unit-materials" data-obj-type="var3">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <span class="caption">Проектная документация</span>
                            </div>
                            <div class="col-3">
                                <div class="custom-radio-group">
                                    <label class="custom-radio">
                                        <input type="radio" name="pd" value="1" checked>
                                        <span>есть</span>
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="pd" value="0">
                                        <span>есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label class="custom-input__file">
                                    <input type="file" name="pd_files" data-path="Проектная документация">

                                    <span>Выбрать файлы</span>
                                </label>
                                <ul></ul>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <input class="btn button" type="submit" value="Отправить данные">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>