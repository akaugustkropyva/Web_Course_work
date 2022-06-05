<section id="form-input" class="window">
    <div class="pop-up">
        <h1>[ Введіть дані ]</h1>
        <hr>
        <form action="{{route('submition')}}" name="form" method="POST">
            @csrf
            <label>
                <input type="text" placeholder="Ім'я" name="name" class="input">
            </label>
            <label>
                <input type="email" placeholder="Пошта" name="email" class="input">
            </label>
            <label>
                <input type='tel' placeholder="Телефон" name="phone" class="input">
            </label>
            <label>
                <input type="number" placeholder="Номер банківської картки" name="card" class="input">
            </label>
            <div class="digits">
                <div class="date">
                    <label>
                        <input type="number" placeholder="Місяць" name="month" class="input">
                    </label>
                    <p>/</p>
                    <label>
                        <input type="number" placeholder="Рік" name="year" class="input">
                    </label>
                </div>
                <label>
                    <input type="number" placeholder="Код" name="code" class="input">
                </label>
            </div>
            <button type="submit" class="button">Купити квиток</button>
        </form>
    </div>
</section>

