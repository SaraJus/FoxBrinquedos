<style>

.modern-blue-button {
    background-color: #43ADDA; 
    height: 30px;
    margin: 10px;
    color: #FFFFFF; 
    padding: 0.75rem 1.5rem; 
    border: none; 
    border-radius: 5px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    font-weight: 600; 
    text-transform: uppercase; 
    transition: background-color 0.3s, transform 0.3s; 
    cursor: pointer; 
    display: inline-flex;
    align-items: center; 
    justify-content: center; 
}

.modern-blue-button:hover {
    background-color: #102B7B; 
    transform: translateY(-2px); 
}

.modern-blue-button:focus {
    outline: none; 
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5); 
}

.modern-blue-button:active {
    background-color: #1E40AF; 
    transform: translateY(0); 
}

.modern-blue-button:disabled {
    background-color: #93C5FD; 
    cursor: not-allowed; 
    opacity: 0.7; 
}

</style>
<button class="modern-blue-button" >
    {{ $slot }}
</button>
