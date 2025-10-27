<div class="form">
    <form method="post" action="calc.php">
        <input type="number" name="numb1"/>
        <select name="operator"> required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="numb2"/>
        <button type="submit" name="btn_calc">Рассчитать</button>
    </form>
</div>

<?php

