<script type="text/javascript">
document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get form data
    var formData = new FormData(document.getElementById('dynamic-form'));

    // Get values from formData
    var modeOfPayment = formData.get('modeOfPayment');
    var orderDate = formData.get('orderdate');
    var customerName = formData.get('customername');
    var email = formData.get('email');
    var phone = formData.get('phone');
    var customerId = formData.get('customerid');
    var address = formData.get('address');

    // Create HTML for services table
    var servicesTableHTML = '<table class="table table-bordered">';
    servicesTableHTML += '<tr><th>Service</th><th>Qty/Per</th><th>Price</th></tr>';

    // Loop through all services, quantities, and prices
    for (var i = 0; i < formData.getAll('services[i]').length; i++) {
        var service = formData.getAll('services[i]')[i];
        var quantity = formData.getAll('quantity[]')[i];
        var price = formData.getAll('price[]')[i];
        
        // Add row for each service
        servicesTableHTML += '<tr>';
        servicesTableHTML += '<td>' + service + '</td>';
        servicesTableHTML += '<td>' + quantity + '</td>';
        servicesTableHTML += '<td>' + price + '</td>';
        servicesTableHTML += '</tr>';
    }

    // Close services table HTML
    servicesTableHTML += '</table>';

    // Calculate total cost
    var totalCost = 0;
    for (var i = 0; i < formData.getAll('price[]').length; i++) {
        totalCost += Number(formData.getAll('price[]')[i]) * Number(formData.getAll('quantity[]')[i]);
    }

    // Create modal content
    var modalContentHTML = `
        <div style="width:1130px">
            <p><strong>Customer Name:</strong> ${customerName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Mobile:</strong> ${phone}</p>
            <p style="text-align:center;"><strong>SERVICES / PRODUCTS</strong></p>
            ${servicesTableHTML}
            <p><strong>Total Cost:</strong> ${totalCost}</p>
            <p><strong>Mode of Payment:</strong> ${modeOfPayment}</p>
            <p><strong>Order Date:</strong> ${orderDate}</p>
        </div>
    `;

    // Display modal content
    var modalContent = document.getElementById('modalContent');
    modalContent.innerHTML = modalContentHTML;

    // Display modal
    var modal = document.getElementById('previewbill');
    modal.style.display = "block";
});

// Close the modal when the user clicks on the close button
document.getElementsByClassName('close')[0].addEventListener('click', function() {
    var modal = document.getElementById('previewbill');
    modal.style.display = "none";
});
</script>
