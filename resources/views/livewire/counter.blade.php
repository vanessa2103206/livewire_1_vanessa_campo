<div class="text-center" style="max-width: 450px; margin: 50px auto; background-color: #212529; border: 2px solid #ffc107; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.4); font-family: sans-serif; color: #ffffff;">
    
    <h2 style="color: #ffc107; font-weight: bold; margin-bottom: 10px;">Livewire Counter</h2>
    <p style="color: #adb5bd; font-size: 14px; margin-bottom: 30px;">Esercizio Dinamico - Vanessa Campo</p>

    <!-- Il cerchio dorato che mostra il numero in tempo reale -->
    <div style="width: 120px; height: 120px; background-color: #2c3034; border: 3px solid #ffc107; border-radius: 50%; margin: 0 auto 35px; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 0 15px rgba(0,0,0,0.5);">
        <span style="font-size: 42px; font-weight: bold; color: #ffc107;">{{ $count }}</span>
    </div>

    <!-- Contenitore dei Bottoni -->
    <div style="display: flex; flex-direction: column; gap: 15px;">
        
        <!-- Riga dei bottoni standard (+1 e -1) -->
        <div style="display: flex; gap: 15px;">
            <button wire:click="decrement" style="flex: 1; background-color: #dc3545; color: white; padding: 12px; border: none; border-radius: 6px; font-weight: bold; font-size: 16px; cursor: pointer;">- 1</button>
            <button wire:click="increment" style="flex: 1; background-color: #198754; color: white; padding: 12px; border: none; border-radius: 6px; font-weight: bold; font-size: 16px; cursor: pointer;">+ 1</button>
        </div>

        <!-- Riga dei bottoni avanzati con parametro (+5 e -5 di prova) -->
        <div style="display: flex; gap: 15px;">
            <button wire:click="decrementBy(5)" style="flex: 1; background-color: #fd7e14; color: white; padding: 12px; border: none; border-radius: 6px; font-weight: bold; font-size: 15px; cursor: pointer;">- 5 (Parametro)</button>
            <button wire:click="incrementBy(5)" style="flex: 1; background-color: #0dcaf0; color: #212529; padding: 12px; border: none; border-radius: 6px; font-weight: bold; font-size: 15px; cursor: pointer;">+ 5 (Parametro)</button>
        </div>

    </div>
</div>
