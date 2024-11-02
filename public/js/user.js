// $(document).ready(function () {
//     function calculateTotal() {
//         var qty = parseInt($("#qty").val()) || 0; // Get the quantity
//         var harga = parseInt($("#harga").val()) || 0; // Get the price
//         var subtotal = qty * harga; // Calculate total

//         $("#total").val(subtotal); // Set the total in the total input
//     }

//     // Trigger calculation when qty or harga changes
//     $("#qty").on("input change", calculateTotal);
//     $("#harga").on("input change", calculateTotal);

//     // Initial calculation
//     calculateTotal();

//     // Handle click for plus buttons
//     $(".btn-plus").on("click", function () {
//         var qtyInput = $(this).siblings(".qty-input"); // Get the corresponding qty input
//         var nilai = parseInt(qtyInput.val()) || 0; // Default to 0 if empty
//         var penjumlahan = nilai + 1; // Increment by 1
//         qtyInput.val(penjumlahan); // Update the input value
//     });

//     // Handle click for minus buttons
//     $(".btn-minus").on("click", function () {
//         var qtyInput = $(this).siblings(".qty-input"); // Get the corresponding qty input
//         var nilai = parseInt(qtyInput.val()) || 0; // Default to 0 if empty
//         if (nilai > 0) {
//             var pengurangan = nilai - 1; // Decrement by 1
//             qtyInput.val(pengurangan); // Update the input value
//         }
//     });
// });
