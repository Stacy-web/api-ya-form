import { API_TOKEN } from './config.js';

( function( $ ) {
    $('form').on('submit', function(e) {
        e.preventDefault();

        const inputs = $('input:not([type="submit"])');
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
        
        inputs.each(function() {
            if ($(this).is('[type="file"]')) {

            } else {

            }
        });
    }); 
    
} )(jQuery)