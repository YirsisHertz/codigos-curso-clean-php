<?php

function createFile(string $fileName)
{
    touch($fileName);
}

function createTempFile(string $fileName)
{
    touch("./temp/".$fileName);
}

function createPDF(string $fileName)
{
    touch("./pdf/".$fileName);
}

createFile("Permanent File.txt");
createTempFile("Temporal File.txt");
createPDF("PermanentPDF.pdf");

