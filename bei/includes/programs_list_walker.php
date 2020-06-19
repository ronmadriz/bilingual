<?
// Program Walker
class Programs_Walker extends Walker_Nav_Menu {
	// top level <ul>
	function start_lvl(&$output, $depth = 0, $args = null) {}

	// top level </ul>
	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {}
}