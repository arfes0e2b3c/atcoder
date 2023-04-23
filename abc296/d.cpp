#include <bits/stdc++.h>
using namespace std;
int n, m;
int main() {
  cin >> n >> m;

  int minA; 
  minA = pow(n, 2.0) + 1;

  for (int i = n; i >= sqrt(m); i++) {
    minA = min(i * ceil(m / i), minA);
  }

  if(min != pow(n, 2.0) + 1) {
    cout << min;
  } else {
    cout << -1;
  }
  return 0;
}


