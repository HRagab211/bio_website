<?php
use Illuminate\Support\Facades\DB;
$bios= DB::table('bios')->get()->first();

?>

<aside style="background-image: url({{"img/$bios->image"}});"></aside>
