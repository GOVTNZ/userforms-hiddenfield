<?php

class EditableHiddenField extends EditableFormField {

    private static $singular_name = 'Hidden Field';

    private static $plural_name = 'Hidden Fields';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName('Default');

        return $fields;
    }

    public function getFormField()
    {
        $field = HiddenField::create(
            $this->Name,
            $this->EscapedTitle)
            ->setFieldHolderTemplate('UserFormsField_holder')
            ->setTemplate('HiddenField');

        $this->doUpdateFormField($field);

        return $field;
    }

}
