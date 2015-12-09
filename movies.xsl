<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/movies">
  <html>
  <body>
  <h2>Reviewed Movies</h2>
    <table border="1" style="width 100%">
      <tr bgcolor="#00FF00">
  <h2>Next Review</h2>
    <table border="1"style="width 100%">
      <tr  bgcolor="#FF0000">
        <th>Title</th>
        <th>Genre</th>
        <th>Rating</th>
     </tr>
      <xsl:for-each select="film">
      <tr>
        <td><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="genre"/></td>
        <td><xsl:value-of select="rating"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

