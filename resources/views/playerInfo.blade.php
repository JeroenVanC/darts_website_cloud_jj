@extends('master')
@section('contents')

<div class="info-container">
    <h1>YOUR INFO</h1>
    <div class="info-table-container info-player--table-contianer">
        <div class="ranking-table">
            <table id="">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Avg</th>
                        <th>9 darters</th>
                        <th>Highest Finish</th>
                        <th>180</th>
                        <th>140+</th>
                        <th>120+</th>
                        <th>100+</th>
                    </tr>
                </thead>
                <tbody id="info-player-list-table" class="list-tbody">
                    
                </tbody>
            </table>
        </div>

        
    </div>

    <h1>ALL PLAYERS</h1>

    <div class="info-table-container info-others--table-contianer">
        <div class="ranking-table">
            <table id="">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Avg</th>
                        <th>9 darters</th>
                        <th>Highest Finish</th>
                        <th>180</th>
                        <th>140+</th>
                        <th>120+</th>
                        <th>100+</th>
                    </tr>
                </thead>
                <tbody id="info-list-tbody" class="list-tbody">
                    
                </tbody>
            </table>
        </div>

        
    </div>
</div>
    
<script src="js/playerInfo.js"></script>
@stop