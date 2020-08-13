<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Artworks</h2>
  <table border="1">
    <tr bgcolor="blue">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Date</th>
      <th style="text-align:left">Type</th>
      <th style="text-align:left">Dimensions</th>
      <th style="text-align:left">Location</th>
      <th style="text-align:left">Artist</th>
      <th style="text-align:left">Price</th>
      <th style="text-align:left">Genre</th>
    </tr>
    <xsl:for-each select="artworks/artwork">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="date1"/></td>
      <td><xsl:value-of select="type"/></td>
      <td><xsl:value-of select="dimensions"/></td>
      <td><xsl:value-of select="location"/></td>
      <td><xsl:value-of select="artist"/></td>
      <td><xsl:value-of select="price"/></td>
      <td><xsl:value-of select="genre"/></td>
      
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

