<form enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Личные данные</h3>

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
                            <input type="file" name="photo_spec" multiple>

                            <span>Выбрать файлы</span>
                        </label>
                        <ul></ul>
                    </label>
                </div>
            </div>
            <div class="col-6">
                <h3>Профессиональные сведения</h3>

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
                        <textarea name="" cols="30" rows="3" name="po"></textarea>
                    </label>
                    <label class="custom-input">
                        <span>Диплом о высшем образовании (без заверения)</span>
                        <input type="file" name="diplom">
                    </label>
                    <label class="custom-input">
                        <span>Трудовая книжка (без заверения)</span>
                        <input type="file" name="tk">
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Перечень ранее реализованных проектов</h3>

                <div class="form-group">
                    <div class="unit">
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
                        <label class="custom-input">
                            <span>Фотография или чертеж первого объекта (необязательно, но желательно)</span>
                            <input type="file" name="object1_files">
                        </label>
                    </div>
                    <div class="unit">
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
                        <label class="custom-input">
                            <span>Фотография или чертеж второго объекта (необязательно, но желательно)</span>
                            <input type="file" name="object2_files">
                        </label>
                    </div>
                    <div class="unit">
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
                        <label class="custom-input">
                            <span>Фотография или чертеж третьего объекта (необязательно, но желательно)</span>
                            <input type="file" name="object3_files">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Материалы по основному проекту портфолио</h3>

                <label class="custom-input">
                    <span>Дата реализации третьего объекта</span>
                    
                    <select name="object_type" id="">
                        <option value="">Объект капитального строительства</option>
                        <option value="">Линейный объект</option>
                        <option value="">Другое</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
</form>