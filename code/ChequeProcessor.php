<?php


class ChequeProcessor extends PaymentProcessor_MerchantHosted {

  public function getFormFields() {

    $fieldList = new FieldList();

    $fieldList->push(new NumericField('Amount', 'Amount', ''));
    $fieldList->push(new DropDownField('Currency', 'Select currency :', $this->gateway->getSupportedCurrencies()));

    return $fieldList;
  }
}