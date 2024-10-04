<?php 
    $halaman = "data_penjualan";
    include('layout/header.php')
?>

<main>
       
        <section align="center">
            <table border="1" align="center" cellpadding="5" cellspacing="5">
                <thead>
                    <tr>
                        <th>ID BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>TANGGAL TRANSASKI</th>
                        <th>KUANTITAS HARGA</th>
                        <th>HARGA SATUAN BARANG</th>
                        <th>TOTAL HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Handbody Marina</td>
                        <td>2024-08-22</td>
                        <td>15</td>
                        <td>Rp. 12.000</td>
                        <td>Rp. 180.000</td>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>Handbody Shinzui</td>
                        <td>2024-08-22</td>
                        <td>10</td>
                        <td>Rp. 14.000</td>
                        <td>Rp. 140.000</td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Handbody Vaseline Glutahya</td>
                        <td>2024-08-22</td>
                        <td>20</td>
                        <td>Rp. 8.000</td>
                        <td>Rp. 160.000</td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Handbody Nivea</td>
                        <td>2024-08-22</td>
                        <td>11</td>
                        <td>Rp. 16.000</td>
                        <td>Rp. 176.000</td>
                    </tr>
                    <tr>
                        <td>104</td>
                        <td>Handbody Citra</td>
                        <td>2024-08-22</td>
                        <td>30</td>
                        <td>Rp. 9.000</td>
                        <td>Rp. 270.000</td>
                    </tr>
                    <tr>
                        <td>105</td>
                        <td>Handbody Natur e</td>
                        <td>2024-08-22</td>
                        <td>8</td>
                        <td>Rp. 15.000</td>
                        <td>Rp. 120.000</td>
                    </tr>
                    <tr>
                        <td>106</td>
                        <td>Handbody Vaseline Gluta</td>
                        <td>2024-08-22</td>
                        <td>5</td>
                        <td>Rp. 42.000</td>
                        <td>Rp. 210.000</td>
                    </tr>
                    <tr>
                        <td>107</td>
                        <td>Handbody Scarlet</td>
                        <td>2024-08-22</td>
                        <td>7</td>
                        <td>Rp. 52.000</td>
                        <td>Rp. 364.000</td>
                    </tr>
                    <tr>
                        <td>108</td>
                        <td>Handbody Garnier</td>
                        <td>2024-08-22</td>
                        <td>12</td>
                        <td>Rp. 14.000</td>
                        <td>Rp. 168.000</td>
                    </tr>
                    <tr>
                        <td>109</td>
                        <td>Handbody Sariayu</td>
                        <td>2024-08-22</td>
                        <td>15</td>
                        <td>Rp. 9.000</td>
                        <td>Rp. 135.000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" align="right">Total</th>
                        <th colspan="3" align="right">Rp. 1.923.000</th>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>

<?php 
    include('layout/footer.php')
?>