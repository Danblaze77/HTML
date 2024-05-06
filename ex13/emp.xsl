<?xml version="1.0" encoding ="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<table border="2" >
<tr>
   <th>ID</th>
   <th>Name</th>
   <th>Position</th>
   <th>Department</th>
   <th>Salary</th>
</tr>
<xsl:for-each select="employees/employee[salary>50000]">
<tr bgcolor="cyan">
  <td><xsl:value-of select="id"/></td>
  <td><xsl:value-of select="name"/></td>
  <td><xsl:value-of select="position"/></td>
  <td><xsl:value-of select="department"/></td>
  <td><xsl:value-of select="salary"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
