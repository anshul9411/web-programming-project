<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:courier;font-size:12pt;">
<xsl:for-each select="my_college/student">
  <div style="background-color:grey;color:pink;padding:12px">
    <span style="font-weight:bold"><xsl:value-of select="name"/> - </span>
    <xsl:value-of select="dept"/>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <p>
    <xsl:value-of select="dept"/>
    <span style="font-style:italic"> <xsl:value-of select="rno"/></span>
    </p>
  </div>
</xsl:for-each>
</body>
</html>