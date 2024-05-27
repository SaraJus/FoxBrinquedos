@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input-log']) !!}>

<style>
    .input-log {
    padding: 10px;
    border: 2px solid #43ADDA; 
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.input-log:focus {
    border-color: #2980b9; 
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

.input-log:disabled {
    background-color: #ecf0f1; 
    border-color: #bdc3c7; 
    cursor: not-allowed;
}

.input-log::placeholder {
    color: #95a5a6; 
    opacity: 1; 
}

.input-log:disabled::placeholder {
    color: #bdc3c7; 
}

</style>