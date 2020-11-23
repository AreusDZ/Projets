
const table = $('<table>');

for (let i = 0; i < row; i++) {
    const tr = $('<tr>');
    for (let j = 0; j < col; i++){
        tr.append($('<td>')).html(i + "-" + j);
       
    } 

    table.append(tr);
}

$('body').append(table);