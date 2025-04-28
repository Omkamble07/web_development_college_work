<?php
// Validate the first XML document
$dom1 = new DOMDocument();
$dom1->load('internal.xml'); // Load the internal XML
if ($dom1->validate()) {
    echo "Internal XML document is valid.\n";
} else {
    echo "Internal XML document is invalid.\n";
}

// Validate the second XML document
$dom2 = new DOMDocument();
$dom2->load('external.xml'); // Load the external XML
if ($dom2->validate()) {
    echo "External XML document is valid.\n";
} else {
    echo "External XML document is invalid.\n";
}
?>