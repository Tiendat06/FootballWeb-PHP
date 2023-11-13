function search(){
    let input = document.getElementById('search-input');
    let list = document.getElementById('table');

    input.addEventListener('input', function() {
        let query = input.value.toLowerCase();
        let items = list.getElementsByClassName('tr');

        for (let i = 0; i < items.length; i++) {
            let item = items[i];
            let text = item.textContent.toLowerCase();
            // let trID = 'manage-booking__tr--'+item.id;
            // console.log(item);
            // let tr = document.getElementById(trID);

            if (text.includes(query)) {
                if(item.classList.contains('d-none')){
                    item.classList.remove('d-none');
                }
            } else {
                if(!item.classList.contains('d-none')){
                    item.classList.add('d-none');
                }
            }
        }
    });
}

function onChangeRound(){
    $().ready(()=>{
        $('#round_id').change(()=>{
            // console.log('hi');
            $.ajax({
                url: '/pages/player/player_change_round.php',
                type: 'post',
                data:{
                    round_id: $('#round_id').val(),
                }
            }).done((result)=>{
                $('#match_select').html(result);
            })
        })
    });
}

function onChangeRoundPlayOff(){
    $().ready(()=>{
        $('#round_id').change(()=>{
            // console.log('hi');
            $.ajax({
                url: '/pages/player/player_change_playoff.php',
                type: 'post',
                data:{
                    round_id: $('#round_id').val(),
                }
            }).done((result)=>{
                $('#exampleFormControlSelect1').html(result);
            })
        })
    });
}

function onChangeRoundPlayOffForPlayer2(){
    $().ready(()=>{
        $('#round_id').change(()=>{
            // console.log('hi');
            $.ajax({
                url: '/pages/player/player_change_playoff_2.php',
                type: 'post',
                data:{
                    round_id: $('#round_id').val(),
                }
            }).done((result)=>{
                $('#exampleFormControlSelect2').html(result);
            })
        })
    });
}


function ajaxCheckAttendance(){
    let player_id = $('#player_id');
    // console.log(player_id);
    let attendance = $('#attendance');
    $().ready(() => {
        // $('#info-attendance__onclick-'+player_id.val()).click(() =>{
        //     console.log('#info-attendance__onclick-'+player_id.val())

            $.ajax({
                url: "/pages/info/info_attendance.php",
                type: 'post',
                data: {
                    id: player_id.val(),
                    atd: attendance.val(),
                },
            }).done(function(result){
                console.log(result);
                $('#info-attendance__onclick-'+player_id.val()).html(result);
            })
        // })
    });
}

function onClickSuccess(){
    const showToastButton = document.getElementsByClassName('showToast');
    const toast = document.getElementById('toast');

    for (let i = 0; i < showToastButton.length; i++) {
        showToastButton[i].addEventListener('click', () => {
            toast.classList.remove('hidden');

            toast.addEventListener('click', () => {
                toast.classList.add('hidden');
            });

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000); // 3 seconds
        });
    }

}