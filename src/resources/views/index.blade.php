@extends('layouts.app')
@section('content')


@if (count($errors)>0)
<ul>
    @foreach($errors->all() as $error)
    <li>
        {($error)}
    </li>
    @endforeach
</ul>
@endif
<form action="/thanks" method="post">
    <table>
        @csrf
        <tr>
            <th>
                名前
            </th>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <th>
                メールアドレス
            </th>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <td>
            <button>送信する</button>
        </td>
    </table>
</form>
@endsection