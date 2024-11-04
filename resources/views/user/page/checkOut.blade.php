@extends('user.layout.index')

@section('content')
<div class="row mt-3">
    <div class="col-12 col-sm-7 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title">Masukan Alamat Penerima</h3>
                <div class="mb-3">
                    <label for="namaPenerima" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" placeholder="Masukan Nama Penerima" autofocus>
                </div>
                <div class="mb-3">
                    <label for="alamatPenerima" class="form-label">Alamat Penerima</label>
                    <input type="text" class="form-control" id="alamatPenerima" name="alamatPenerima" placeholder="Masukan Alamat Penerima">
                </div>
                <div class="mb-3">
                    <label for="tlp" class="form-label">Nomor Telp</label>
                    <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Nomor Telepon">
                </div>
                <div class="mb-3">
                    <label for="ekspedisi" class="form-label">Ekspedisi</label>
                    <select name="ekspedisi" class="form-select" id="ekspedisi">
                        <option value="">-- Pilih Ekspedisi --</option>
                        <option value="jne">JNE</option>
                        <option value="jnt">J&T</option>
                        <option value="sicepat">Sicepat</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-5">
        <div class="card border shadow">
            <div class="card-header text-white text-center p-2" style="background-color:#0D7C66;">
                <h5 class="mb-0">Total Belanja</h5>
            </div>
            <div class="card-body">
                <div class="mb-3 d-flex justify-content-between">
                    <span>Total</span>
                    <span id="totalSeluruh" class="text-end">Rp200.000</span>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <span>Diskon</span>
                    <span id="discountSeluruh" class="text-end">Rp0</span>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <span>PPN</span>
                    <span id="ppn" class="text-end">Rp2.200</span>
                </div>
                <hr>
                <div x-data="checkout()" class="d-flex flex-column">
                    <div class="d-flex justify-content-between font-weight-bold mb-2">
                        <span>Harga</span>
                        <span class="text-end" x-text="formatPrice(finalPrice)"></span>
                    </div>
                    
                    <div class="d-flex justify-content-between font-weight-bold mb-2">
                        <span>Jumlah Bayar</span>
                        <input type="text" x-model="uangKembali" @input="calculateKembalian" class="form-control text-end w-50" placeholder="Masukkan jumlah">
                    </div>
                    
                    <div class="d-flex justify-content-between font-weight-bold mb-2">
                        <span>Kembalian</span>
                        <span class="text-end" x-text="formatPrice(kembalian)"></span>
                    </div>
                </div>
                <button class="btn btn-success mt-3 w-100">
                    <i class="fas fa-print"></i> Print Struck
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function checkout() {
        return {
            finalPrice: 202200, // Set your total price here
            uangKembali: '',
            kembalian: 0,

            calculateKembalian() {
                const diterima = parseInt(this.uangKembali.replace(/\./g, '') || 0); // Parse received amount
                this.kembalian = Math.max(0, diterima - this.finalPrice); // Calculate kembalian
            },

            formatPrice(value) {
                return 'Rp' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Format with dot as thousands separator
            }
        }
    }
</script>
@endsection
