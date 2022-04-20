function solve(st, a, b) {
  let substring = st.substring(a, b+1);
  substring = substring.split("");
  substring = substring.reverse();
  substring = substring.join("");

  let sub1 = st.substring(0, a);
  let sub2 = st.substring(b+1, st.lenght);

  console.log(sub1 + substring + sub2);
}

solve("dEVELOper", 1, 5);
