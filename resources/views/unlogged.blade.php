@if auth()->user
@route('layouts.app')
@endif
@else
@extends('layouts.guest')
