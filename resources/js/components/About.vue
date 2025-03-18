<template>
    <div class="about">
        <div class="text">
            <p style="margin-bottom: 10px;"><b>Приветствую!</b></p>
            <p>
                Меня зовут Ислам, я Full-Stack разработчик с пониманием
                как frontend, так и backend разработки. Специализируюсь на создании
                масштабируемых веб-приложений с использованием современных технологий
                и фреймворков.
            </p>
            <div class="contacts">
                <a href="https://t.me/Afam46">Тг: @Afam46</a><br>
                <a>Почта: afamka2007@gmail.com</a><br>
                <a href="https://kwork.ru/user/afam4642">Кворк: https://kwork.ru/user/afam4642</a>
            </div>
        </div>
    </div>
</template>

<style scoped>
.about{
    background-color: rgba(99, 99, 99, 0.2);
    outline: 2px solid rgb(255, 255, 255, 0.4);
    width: 70%;
    margin: 0 auto;
    border-radius: 20px;
}
.text{
    padding: 20px;
}
p{
    font-family: "Open Sans", sans-serif;
    font-size: calc(var(--index) * 1);
}
a{
    font-size: calc(var(--index) * 1);
}
</style>