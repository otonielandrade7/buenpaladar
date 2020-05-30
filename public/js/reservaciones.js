Vue.component('v-select', VueSelect.VueSelect);
new Vue({
    el:'#reservacion_app_vue',
    data:{
        prueba:'hola',
        tipos:[
            {tipoNombre:'Pequeña (1-2 Mesas)', tipoCode:0},
            { tipoNombre:'Mediana (3-4 Mesas)', tipoCode:1},
            { tipoNombre:'Grande (5-6 Mesas)', tipoCode:2}
        ],
        sillas:[
            {nSilla:'1'},
            {nSilla:'2'},
            {nSilla:'3'},
            {nSilla:'4'}
        ],
        reservacion:[]
    },
    methods:{
        setSelected1:function(){
            if(this.reservacion===null){
                this.reservacion=[];
            }
        },
        setSelected2:function(){
            if(this.reservacion===null){
                this.reservacion=[];
            }
        },
    },
    created:function(){
    }
})