let initialise = '<option  value="null">Choose...</option>';
let room = document.querySelector('#room');
let room_type = document.querySelector('#room_type');
let room_view = document.querySelector('#room_view');
let room_type_container = document.querySelector('#room_type_container')
let room_view_container = document.querySelector('#room_view_container');
let pension_type_container = document.querySelector('#pension_type_container');
let pension_type = document.querySelector('#pension_type');
let pension = document.querySelector('#pension');
let without_en = document.querySelector('#without_en');
let with_en = document.querySelector('#with_en');
let en_container = document.querySelector('#en_container');
let adult_nbr = document.querySelector('#adult_nbr');
let adult_choice = document.querySelector('#adult_choice');
let baby_nbr = document.querySelector('#baby_nbr');
let baby_choice = document.querySelector('#baby_choice');
let add = document.querySelector('.add');
let add_new = document.querySelector('#add_new');

var room_view_array = {
    'simple': ['Vue interieur', 'Vue exterieur'],
    'double': ['lit double', '2 lit simple'],
    'appartement': ['Vue interieur', 'Vue exterieur'],
    'bungalow': ['Vue interieur', 'Vue exterieur'],

};

var double_room_type = {
    'lit double': ['Vue interieur', 'Vue exterieur'],
    '2 lit simple': ['Vue interieur']
};

var pension_type_array = ["Petit dej/dej", "Petit dej/din"];

var baby_room = ["with lit", "without lit"];

var adulte_room = ["add room simple", "with lit"];

room.addEventListener('change' , () => {
    if (room.value == 'double') {

        room_type.innerHTML = initialise;
        room_type_container.style = "display:block";
        room_view_container.style = "display:none";

        for (i = 0; i < room_view_array[room.value].length; i++) {
            room_type.innerHTML += '<option value="' + room_view_array[room.value][i] + '">' + room_view_array[room.value][i] + '</option>';
        }

    } else {
        room_type_container.style = "display:none";
        room_view_container.style = "display:block";
        room_view.innerHTML = initialise;

        for (i = 0; i < room_view_array[room.value].length; i++) {
            room_view.innerHTML += '<option value="' + room_view_array[room.value][i] + '">' + room_view_array[room.value][i] + '</option>';
        }
        console.log(room_view);
    }

    room_type.addEventListener('change' , () => {

        room_view_container.style = "display:block";
        room_view.innerHTML = initialise;

        for (i = 0; i < double_room_type[room_type.value].length; i++) {
            room_view.innerHTML += '<option value="' + double_room_type[room_type.value][i] + '">' + double_room_type[room_type.value][i] + '</option>';
        }

    })
})




pension.addEventListener('change' , () => {

    if (pension.value == 'demi') {

        pension_type_container.style = "display:block";
        pension_type.innerHTML = initialise;

        for (i = 0; i < pension_type_array.length; i++) {
            pension_type.innerHTML += '<option value="' + pension_type_array[i] + '">' + pension_type_array[i] + '</option>';
        }
    } else {
        pension_type_container.style = "display:none";
    }
})

without_en.addEventListener("change" , () => {
    en_container.style = "display:none";
})

with_en.addEventListener('change' , () => {
    en_container.style = "display:block";
})

adult_nbr.addEventListener('input' , () =>  {
    adult_choice.style = "display:inline"
    adult_choice.innerHTML = initialise;
    if (adult_nbr.value > 0){

        for (i = 0; i < adulte_room.length; i++) {
            adult_choice.innerHTML += '<option value="' + adulte_room[i] + '">' + adulte_room[i] + '</option>';
        }

    }else{
        adult_choice.style = "display:none"

    }
})
baby_nbr.addEventListener('input' , () => {
    baby_choice.style = "display:inline"
    baby_choice.innerHTML = initialise;
    if (baby_nbr.value > 0){

        for (i = 0; i < baby_room.length; i++) {
            baby_choice.innerHTML += '<option value="' + baby_room[i] + '">' + baby_room[i] + '</option>';
        }

    }else{
        baby_choice.style = "display:none"
    }
})



