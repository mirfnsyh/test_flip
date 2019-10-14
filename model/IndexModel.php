<?php 
require_once('config/Database.php');

class IndexModel { 

	public $mTable = "transactions";

	public $mField = [
        'transactions_id',
        'amount',
        'status',
        'timestamp',
        'bank_code',
        'account_number',
        'beneficiary_name',
        'remark',
        'receipt',
        'time_served',
        'fee',
        'created_at'

    ];

}
