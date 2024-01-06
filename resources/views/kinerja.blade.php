@extends('layouts.main')
@section('container')

    <h1>Our Performance SMT1 2023</h1>
    <div class="center">
        <img src="img/circle.png" alt="Big Giant Circle about Productivities">
    </div>


    <div class="table-responsive">
        <h2>Realisasi Pembelajaran 2023</h2>

        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>
                        <img src="img/bullseye.png" style="height: 50px">
                    </th>
                    <th>
                        <img src="img/bullseye.png" style="height: 50px">
                    </th>
                    <th>
                        <img src="img/bullseye.png" style="height: 50px">
                    </th>
                    <th>
                        <img src="img/bullseye.png" style="height: 50px">
                    </th>
                    <th style="background-color: #367df7">
                        <img src="img/bullseye.png" style="height: 50px">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php $itn=214; echo "$itn"?></td>
                    <td><?php $tna=43;echo "$tna"?></td>
                    <td><?php $am=19;echo "$am"?></td>
                    <td><?php $penugasan=366;echo "$penugasan"?></td>
                    <td style="background-color: #367df7; color: white"><?php $total=$itn+$tna+$am+$penugasan; echo "$total" ?></td>
                </tr>
                <tr>
                    <td>ITN</td>
                    <td>TNA</td>
                    <td>AM</td>
                    <td>PENUGASAN</td>
                    <td style="background-color: #367df7; color: white">TOTAL</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h4>Produktivitas</h4>
        <p>Produktivitas: <b>966.25</b> = <b>155,63%</b></p>
    </div>

@endsection

