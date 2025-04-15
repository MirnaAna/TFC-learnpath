import * as React from "react";
import { styled } from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, { tableCellClasses } from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import Paper from "@mui/material/Paper";

const StyledTableCell = styled(TableCell)(({ theme }) => ({
    [`&.${tableCellClasses.head}`]: {
        backgroundColor: theme.palette.common.black,
        color: theme.palette.common.white,
    },
    [`&.${tableCellClasses.body}`]: {
        fontSize: 14,
    },
}));

const StyledTableRow = styled(TableRow)(({ theme }) => ({
    "&:nth-of-type(odd)": {
        backgroundColor: theme.palette.action.hover,
    },
    // hide last border
    "&:last-child td, &:last-child th": {
        border: 0,
    },
}));

export default function TablaProgreso({ asignaturas }) {
    return (
        <TableContainer component={Paper}>
            <Table sx={{ minWidth: 700 }} aria-label="customized table">
                <TableHead>
                    <TableRow>
                        <StyledTableCell>Contenido Aprendido</StyledTableCell>
                        <StyledTableCell align="right">
                            Areas a Mejorar
                        </StyledTableCell>
                        <StyledTableCell align="right">
                            Conenido por Aprender
                        </StyledTableCell>
                        <StyledTableCell align="right">Estado</StyledTableCell>
                    </TableRow>
                </TableHead>
                <TableBody>
                    {asignaturas.map((asig) => (
                        <StyledTableRow key={asig.id}>
                            <StyledTableCell component="th" scope="row">
                                {asig.nombre}
                            </StyledTableCell>
                            <StyledTableCell align="right">
                                aaaa
                            </StyledTableCell>
                            <StyledTableCell align="right">
                                bbbb
                            </StyledTableCell>
                            <StyledTableCell align="right">
                                cccc
                            </StyledTableCell>
                        </StyledTableRow>
                    ))}
                </TableBody>
            </Table>
        </TableContainer>
    );
}
