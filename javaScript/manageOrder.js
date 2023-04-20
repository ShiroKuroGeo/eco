$(document).ready(function(){
    viewMyOrder();
});



var viewMyOrder =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice:'doGetManageOrder'},
        success: function(data){
        var json = JSON.parse(data);
        str = "";
        json.forEach(element => {
            str += `
            <tr>
                <td>${element.fname}</td>
                <td>${element.title}</td>
                <td>${element.price}</td>
                <td>${element.total_price}</td>
                <td>${element.Qt}</td>
                <td>${element.d_ordered}</td>
                <td>${element.d_delivered}</td>
                <td>${element.p_method}</td>
                <td>
                `
                    if(element.status == 1){
                        str += `<button type="button" class="btn btn-sm btn-danger" onclick="cannotCancelOrder()" aria-disabled="true">Ongoing</button>`
                    }else{
                        str += `<button type="button" class="btn btn-sm btn-danger" onclick="changeStatus(${element.id})">To go</button>`
                    }
                `
                </td>
            </tr>
            
            `;
        });
        $('#manageOrderTable').append(str);
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });  
}

function changeStatus(status){
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice:'changeStatus', status:status},
        success: function(data){
            location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });  
}