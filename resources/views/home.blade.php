<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .title-section{
            background: #F1EAF9;
            height: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-content: center;
        }
        .img{
            max-width: 313px;
            max-height: 161px;
            border-radius: 4px;
        }
        .h1{
            font-family: "Archivo", sans-serif;
            font-size: 48px;
            font-weight: 600;
            text-align: left;
        }
        .text{
            font-family: "Work Sans", sans-serif;
            font-size: 18px;
            text-align: left;
        }
        .highlight{
            color: #782dc8;
        }
        .f-12{
            font-size: 12px;
        }
        .logo{
            width: 22px;
            height: 22px;
            margin-right: 10px;
        }
        #searchInput{
            margin-right: 10px;
        }
        .spinner-border {
            display: none;
        }
    </style>
</head>
<body>
    <div class="title-section">


        <div class="row m-4">
            <div>
                <svg width="142" height="28" viewBox="0 0 142 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-xl-5 mr-lg-1"><path d="M26.5093 6.36596C27.3828 6.50228 28.2442 6.65299 29.0933 6.8181L23.9531 23.1954C21.4854 21.8085 18.18 20.9639 14.5485 20.9639C10.9171 20.9639 7.60784 21.8085 5.14139 23.1954L0 6.81937C0.850791 6.65426 1.7138 6.50355 2.58902 6.36723C3.93217 9.9945 5.56721 12.1218 7.33239 12.1218C9.23403 12.1218 10.9904 9.64777 12.3866 5.48582C12.8099 4.2272 13.2003 2.81109 13.5541 1.2629C13.8826 1.2629 14.2128 1.26078 14.5447 1.25655C14.8766 1.25232 15.2068 1.25443 15.5354 1.2629C15.853 2.68955 16.2426 4.09901 16.7029 5.48582C18.1029 9.64777 19.8554 12.1218 21.7571 12.1218C23.5273 12.1218 25.1649 9.99449 26.5093 6.36596ZM52.7545 1C51.3848 1 50.3778 1.95508 50.3778 3.30387C50.3778 4.68061 51.3886 5.63568 52.7545 5.63568C54.0396 5.63568 55.1553 4.76443 55.1553 3.30387C55.1578 1.92841 54.152 1.00127 52.7545 1.00127V1ZM65.9473 7.0683C63.851 7.0683 62.2299 8.16435 61.4465 10.1025V7.32104H57.7013V21.2852H61.8711V13.8402C61.8711 12.0977 62.849 10.834 64.498 10.834C65.9523 10.834 66.7623 11.596 66.7623 13.054V21.2852H70.932V12.5219C70.9219 9.37344 69.1617 7.06957 65.9473 7.06957V7.0683ZM50.6861 21.2852H54.8558V7.32231H50.6861V21.2852ZM48.8691 7.32231H43.921L39.4986 12.8572V3.19084H35.3289V21.2852H39.4986V15.3566L43.8035 21.2852H48.974L43.3853 13.8681L48.8691 7.32231ZM125.902 13.054C124.532 12.546 123.441 12.2387 123.441 11.1706C123.441 10.0758 124.503 9.59824 125.929 9.59824C126.88 9.59824 128.165 9.9348 128.976 10.4123L129.843 8.36121C128.528 7.65887 127.214 7.29437 125.872 7.29437C123.162 7.29437 120.953 8.83875 120.953 11.3395C120.953 13.6992 122.547 14.5425 125.146 15.4697C126.628 15.9777 127.799 16.3689 127.799 17.5208C127.799 18.7566 126.681 19.2062 125.452 19.2062C124.109 19.2199 122.791 18.8494 121.65 18.1381L120.672 20.1054C121.846 20.9766 123.607 21.51 125.473 21.51C128.1 21.51 130.309 20.1612 130.309 17.3519C130.318 14.8512 128.612 14.065 125.902 13.054ZM140.995 9.76588V7.51917H136.215V3.8665H133.729V7.51917H131.213V9.76588H133.729V16.6242C133.729 19.6583 135.267 21.5126 138.397 21.5126C139.348 21.5126 140.047 21.3437 140.997 20.922V18.6728C140.264 18.9921 139.476 19.1646 138.677 19.1808C137.161 19.1808 136.217 18.3933 136.217 16.708V9.76588H140.995ZM83.052 7.32231H86.8515V20.2171C86.8515 25.1906 84.198 28 79.5835 28C77.4873 28 75.1965 27.3535 73.7421 26.2854L75.4479 23.1954C76.6126 23.9047 77.9428 24.2924 79.3043 24.3194C81.4852 24.3194 82.7702 22.7953 82.7702 20.555V19.3751C81.8756 20.7226 80.4225 21.2802 78.9138 21.2802C75.1674 21.2802 73.1015 18.4708 73.1015 14.5654C73.1015 10.3234 75.6172 7.06449 79.4193 7.06449C80.9279 7.06449 82.1864 7.65379 83.052 8.63808V7.32231ZM82.7727 11.1998C81.9906 10.6371 81.2918 10.4123 80.4528 10.4123C79.1678 10.4123 78.1608 11.0588 77.6579 12.2387C77.3786 12.8292 77.2662 13.5087 77.2662 14.2898C77.2662 16.5365 78.301 18.1101 80.2014 18.1101C81.8225 18.1101 82.7727 16.6216 82.7727 15.1039V11.1998ZM119.109 14.4016C119.109 18.448 116.397 21.5139 112.624 21.5139C108.768 21.5139 106.112 18.3667 106.112 14.4016C106.112 10.3565 108.851 7.28929 112.624 7.28929C116.426 7.29437 119.109 10.4123 119.109 14.4016ZM116.537 14.4016C116.537 11.6481 115.029 9.54109 112.62 9.54109C110.105 9.54109 108.679 11.7611 108.679 14.4016C108.679 17.155 110.217 19.262 112.62 19.262C115.14 19.262 116.537 17.0433 116.537 14.4016ZM101.137 10.8619H92.4995V3.19084H89.9838V21.2852H92.4995V13.2496H101.137V21.2852H103.657V3.19084H101.142L101.137 10.8619Z" fill="#782DC8"></path></svg>
            </div>
            <div class="col-7 text-center d-flex flex-column justify-content-center align-items-start">
                <h1 class="h1">Consumo de API e tratamento de dados</h1>
                <p class="text">Esta é minha solução para o desafio técnico da empresa <span class="highlight">Kinghost</span>. Os dados abaixo são fictícios e foram gerados a partir da ferramenta
                    https://dummyjson.com</p>
            </div>
            <div class="col-5">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Desafio:</strong> Consumir uma API de usuários e exibi-los na tela.
                    </li>
                    <li class="list-group-item">
                        <strong>Funcionalidades:</strong>
                        <ul>
                            <li>Input de pesquisa para encontrar usuários por nome, email ou username.</li>
                            <li>Seleção do estado para filtrar os usuários por localização.</li>
                            <li>Usuários ordenados alfabeticamente dentro de cada estado.</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>Implementação:</strong>
                        <ul>
                            <li>Uso de Laravel para backend: consumo da API, ordenação e busca por estado.</li>
                            <li>Integração do backend com Javascript, Jquery e axios para requisições.</li>
                            <li>Funções para pesquisa utilizando frontend para otimização.</li>
                            <li>Bootstrap como base para o CSS.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="row d-flex justify-content-end align-items-center mb-2">
                    <div class="col-3 form-group mb-2">
                        <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar">
                    </div>
                    <div class="col-2">
                        <select id="select" class="form-select mb-2" aria-label="Default select example">
                            <option selected disabled>Selecionar estado</option>
                            <option value="0">Todos</option>
                        </select>
                    </div>
                </div>

                <table class="table table-striped" id="userTable">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Username</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Função</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="d-flex justify-content-center my-3">
                    <div class="spinner-border" role="status">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
@vite('resources/js/app.js')
</body>
</html>
