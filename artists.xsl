<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Artists</h2>
  <table border="1">
    <tr bgcolor="blue">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Birthdate</th>
      <th style="text-align:left">Death</th>
      <th style="text-align:left">Lived in</th>
      <th style="text-align:left">Genre</th>
      <th style="text-align:left">Famous for</th>
    </tr>
    <xsl:for-each select="artists/artist">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="birth"/></td>
      <td><xsl:value-of select="death"/></td>
      <td><xsl:value-of select="living"/></td>
      <td><xsl:value-of select="genre"/></td>
      <td><xsl:value-of select="famous"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

