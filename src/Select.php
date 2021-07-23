<?php


namespace W1020\HTML;


class Select extends AbstractTag
{
    use ClassTrait;

    protected array $data = [];
    protected string $name = "";
    protected string $selected = "";

    /**
     * @param array $data
     * @return Select
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $name
     * @return Select
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $selected
     * @return Select
     */
    public function setSelected(string $selected): static
    {
        $this->selected = $selected;
        return $this;
    }

    public function html()
    {
        $html = "<select name='$this->name'>";
        foreach ($this->data as $value => $text) {
            $html .= "<option value='$value' " . (($this->selected == $value) ? "selected" : "") . ">$text</option>";
        }
        $html .= "</select>";
        return $html;

    }


}