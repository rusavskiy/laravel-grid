<style>
    table.minimalistBlack {
        border: 3px solid #000000;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }
    table.minimalistBlack td, table.minimalistBlack th {
        border: 1px solid #000000;
        padding: 5px 4px;
    }
    table.minimalistBlack tbody td {
        font-size: 13px;
    }
    table.minimalistBlack thead {
        background: #CFCFCF;
        background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        border-bottom: 3px solid #000000;
    }
    table.minimalistBlack thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        text-align: left;
    }
    table.minimalistBlack tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #000000;
        border-top: 3px solid #000000;
    }
    table.minimalistBlack tfoot td {
        font-size: 14px;
    }
</style>

<table class="minimalistBlack">
    <thead>
    <tr>
        @foreach($columns as $column)
            <th>
                {{ $column->name }}
            </th>
        @endforeach
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td>foot1</td>
        <td>foot2</td>
        <td>foot3</td>
        <td>foot4</td>
        <td>foot5</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($data as $k => $v)
        <tr>
            @foreach($v as $c)
                <td>
                    {!! $c !!}
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>