<form action="/calculate" method="POST">
    @csrf
    <div class="form-group">
        <label for="number1">Number 1:</label>
        <input type="text" name="number1" id="number1" value="{{ old('number1') }}" required>
    </div>

    <div class="form-group">
        <label for="number2">Number 2:</label>
        <input type="text" name="number2" id="number2" value="{{ old('number2') }}" required>
    </div>

    <div class="form-group">
        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add" {{ old('operation') == 'add' ? 'selected' : '' }}>Add</option>
            <option value="subtract" {{ old('operation') == 'subtract' ? 'selected' : '' }}>Subtract</option>
            <option value="multiply" {{ old('operation') == 'multiply' ? 'selected' : '' }}>Multiply</option>
            <option value="divide" {{ old('operation') == 'divide' ? 'selected' : '' }}>Divide</option>
        </select>
    </div>

    <button type="submit">Calculate</button>
</form>

@if(isset($result))
    <div class="result">
        <p>Result: {{ $result }}</p>
    </div>
@endif
</div>