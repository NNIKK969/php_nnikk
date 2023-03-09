<?php
echo '
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Подсчет бюджета</title>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="sub-container">
                <div class="total-amount-container">
                    <h3>Бюджет</h3>
                    <p class="hide error" id="budget-error">
                        Значение не может быть пустым или отрицательным
                    </p>
                    <input type="number" id="total-amount" placeholder="Введите общую сумму">
                    <button class="submit" id="total-amount-button">
                        Установить бюджет
                    </button>
                </div>

                <div class="user-amount-container">
                    <h3>Расходы</h3>
                    <p class="hide error" id="product-title-error">
                        Значения не могут быть пустыми
                    </p>
                    <input type="text" class="product-title" id="product-title" placeholder="Введите название продукта">
                    <input type="number" id="user-amount" placeholder="Введите стоимость продукта">
                    <button class="submit" id="check-amount">Сумма чека</button>
                </div>
            </div>

            <div class="output-container flex-space">
                <div>
                    <p>Общий бюджет</p>
                    <span id="amount">
                        0
                    </span>
                </div>
                <div>
                    <p>Расходы</p>
                    <span id="expenditure-value">
                        0
                    </span>
                </div>
                <div>
                    <p>Баланс</p>
                    <span id="balance-amount">
                        0
                    </span>
                </div>
            </div>
        </div>

        <div class="list">
            <h3>Список расходов</h3>
            <div class="list-container" id="list"></div>
        </div>

    </div>


    <script src="index.js"></script>
</body>

</html>'
?>