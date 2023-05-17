document.addEventListener("DOMContentLoaded", () => {
    //------------------------------------------------------------------------------------ Codigo botones de calcular y borrar Aplicativo JavaScript
    const calcularBtn = document.getElementById('calcularBtn');
    calcularBtn.addEventListener('click', () => {
        const valorCompra = Number(document.getElementById('valorCompra').value);
        const porcentajeUtilidad = Number(document.getElementById('porcentajeUtilidad').value);
        const porcentajeIVA = Number(document.getElementById('porcentajeIVA').value);

        const valorGanancia = valorCompra * porcentajeUtilidad / 100;
        const valorIVA = valorCompra * porcentajeIVA / 100;
        const valorVenta = valorCompra + valorGanancia + valorIVA;

        const valorVentaTxt = valorVenta.toLocaleString('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 });
        const valorGananciaTxt = valorGanancia.toLocaleString('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 });
        const valorIVATxt = valorIVA.toLocaleString('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 });

        document.getElementById('valorVenta').textContent = valorVentaTxt;
        document.getElementById('valorGanancia').textContent = valorGananciaTxt;
        document.getElementById('valorIVA').textContent = valorIVATxt;
    });

    const borrarBtn = document.getElementById('borrarBtn');
    borrarBtn.addEventListener('click', () => {
        document.getElementById('valorCompra').value = '';
        document.getElementById('porcentajeUtilidad').value = '';
        document.getElementById('porcentajeIVA').value = '';
        document.getElementById('valorVenta').textContent = '';
        document.getElementById('valorGanancia').textContent = '';
        document.getElementById('valorIVA').textContent = '';
    });
});