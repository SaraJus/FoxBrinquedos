
<style>
input {
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #3498db; 
  border-radius: 4px;
  font-size: 16px;
  color: #2c3e50; 
  background-color: #ecf0f1; 
  transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus {
  border-color: #2980b9; 
  box-shadow: 0 0 8px rgba(41, 128, 185, 0.5); 
  outline: none;
}

input:disabled {
  background-color: #bdc3c7;
  border-color: #95a5a6; 
  cursor: not-allowed;
  color: #7f8c8d; 
}

</style>

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} >
