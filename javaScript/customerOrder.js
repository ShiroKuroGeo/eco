$(document).ready(function(){
    viewMyOrder();
});

var viewMyOrder =()=>{
    $.ajax({
    type: "POST",
    url: "userDashboardSource/router.php",
    data: {choice: 'doGetAllDataUserOrdered'},
    success: function(data){
        var json = JSON.parse(data);
        var str = "";
        json.forEach(element => {
            //Status
            let status = element.status;
            let statusWWord;
            if(status == 1){
                statusWWord = 'Ongoing';
            }else if(status == 0){
                statusWWord = 'Pending';
            }
            str +=
            `
                <tr>
                    <th scope="row">${element.lname}, ${element.fname}</th>
                    <td>${element.title}</td>
                    <td>${element.total_price}</td>
                    <td>${element.Qt}</td>
                    <td>${element.address}</td>
                    <td>${element.D_ordered}</td>
                    <td>${element.D_deliver}</td>
                    <td>${element.P_method}</td>
                    <td>${statusWWord}</td>
                    <td>
                    `
                        if(element.status == 1){
                            str += `<button type="button" id="cancelTheOrder" class="btn btn-sm btn-danger" onclick="cannotCancelOrder()" aria-disabled="true">Cancel Order</button>`
                        }else{
                            str += `<button type="button" id="cancelTheOrder" class="btn btn-sm btn-danger" onclick="cancelOrder(${element.id})">Cancel Order</button>`
                        }
                    `
                    </td>
                </tr>
            `;
        });
        $('#addTableToAppend').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
        alert(thrownError);
    }
    });
}


function cannotCancelOrder(){
    alert("Cannot cancel order");
}

function cancelOrder(id){
    if(confirm("Are you sure you want to cancel this order?")){
        $.ajax({
            type: "POST",
            url: "userDashboardSource/router.php",
            data: {choice: 'doCancelOrder', delete:id},
            success: function(data){
                if(data == 200){
                    location.reload();
                }else{
                    alert(data);
                    location.reload();
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError);
            }
            });
    }else{
        location.reload();
    }
}