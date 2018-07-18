<?php

const sys_admin = 'SYSADMIN';
const core_admin = 'ADMIN';
const supervisor = "SUPERVISOR";
const agent = "AGENT";
const client = "CLIENT";
const pending = "PENDING";
const rejected = "REJECTED";
const approved = "APPROVED";
const debit = 'DEBIT';
const credit = 'CREDIT';
const loan_repayment = 'Loan Repayment';
const reversal = 'Reversal';
const lending = 'Lend';
const borrow = 'Loan borrowing';
const active = 'ACTIVE';
const Mpesa = 'MPESA';
const cash = "CASH";
const loan_approval_notification = 'LOAN_APPROVAL';
const paid = "PAID";
const individual = "INDIVIDUAL";

function toNumber($number){
    switch ($number){
        case 1:
            return 'First';
            break;

        case 2:return 'Second';break;
        case  3: return 'Third';break;
        case  4: return 'Forth';break;
        default:return $number;
        break;
    }
}
