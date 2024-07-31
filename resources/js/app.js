import './bootstrap';

let responseData;
$( function () {
    $('.spinner-border').show();
    $('#userTable tbody').hide();

    axios.get('/users', )
        .then(response => {
            responseData = response.data;
            buildUserTable(responseData.users);
            buildSelectState(responseData.stateList);
        })
        .catch(error => {
            console.error(error);
        });
});

$('#searchInput').on('input', function () {
    const query = $(this).val();
    const users = responseData.users;
    const stateList = responseData.stateList;

    const filteredUsers = users.filter(user =>
        user.name.toLowerCase().includes(query.toLowerCase()) ||
        user.email.toLowerCase().includes(query.toLowerCase())||
        user.username.toLowerCase().includes(query.toLowerCase())||
        user.address['state'].toLowerCase().includes(query.toLowerCase())||
        user.role.toLowerCase().includes(query.toLowerCase())
    );

    buildUserTable(filteredUsers);
});

$("#select").on("change", function(){
    $('.spinner-border').show();
    $('#userTable tbody').hide();
    $('#searchInput').val('');

    const state = $(this).val();
    axios.post('/usersByState', {state: state})
        .then(response => {
            responseData = response.data;
            console.log(responseData)
            buildUserTable(responseData.users);
        })
        .catch(error => {
            console.error(error);
        });
});

function buildUserTable(users){
    const tbody = $('#userTable tbody');
    tbody.empty();
    if (users.length === 0) {
        tbody.append('<div class="d-flex justify-content-center w-100">Nenhum usuário encontrado</div>');
        return;
    }

    users.forEach(user => {
        const row = `
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="${user.logo}" class="logo mr-3" alt="">
                                    <div class="d-flex flex-column">
                                        <p class="text m-0">${user.name}</p>
                                        <p class="text f-12 m-0">${user.email}</p>
                                    </div>
                                </td>
                                <td>${user.username}</td>
                                <td>${user.age}</td>
                                <td>${user.address.state}</td>
                                <td>${user.role}</td>
                            </tr>
                        `;
        tbody.append(row);
    });

    $('.spinner-border').hide();
    tbody.show();
}

function buildSelectState(stateList){
    const stateSelect = $('.form-select');
    stateSelect.empty();
    stateSelect.append('<option selected>Selecionar estado</option>');
    stateSelect.append('<option>Todos</option>');

    stateList.forEach(state => {
        const option = `<option>${state}</option>`;
        stateSelect.append(option);
    });
}
